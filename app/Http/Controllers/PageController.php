<?php


namespace App\Http\Controllers;


use App\Jobs\SendEmail;
use App\Mail\EmailArsip;
use App\Models\ArchiveSubmit;
use App\Models\Collection;
use App\Models\CollectionCategory;
use App\Models\CollectionType;
use App\Models\Journal;
use Illuminate\Http\Request;

class PageController extends Controller {

    public function index() {

        $data = Collection::limit(12)->get();

        return view('page.welcome', [
            'collections' => $data
        ]);
    }

    public function koleksi(Request $request) {

        $selectedType = null;
        $selectedCategory = null;

        if ($request->has('type')) {
            $selectedType = CollectionType::find($request->input('type'));
        }

        if ($selectedType == null) {
            $selectedType = CollectionType::all()->first();
        }

        if ($request->has('category')) {
            $selectedCategory = CollectionCategory::where('id', $request->input('category'))
                                                  ->where('type_id', $selectedType->id)
                                                  ->get()
                                                  ->first();
        }

        $data = Collection::orderBy('id', 'DESC');

        if ($selectedCategory != null) {
            $data = $data->where('category_id', $selectedCategory->id);
        } else {
            $data = $data->whereHas('Category', function($q) use ($selectedType) {
               return $q->where('type_id', $selectedType->id);
            });
        }

        $data = $data->paginate(12);

        return view('page.koleksi', [
            'selectedType' => $selectedType,
            'data' => $data,
            'selectedCategory' => $selectedCategory
        ]);
    }

    public function koleksiDetail($id) {

        $koleksi = Collection::find($id);

        $next = Collection::where('id', '>', $id)->orderBy('id','asc')->first();

        $previous = Collection::where('id','<', $id)->orderBy('id','desc')->first();

        if (!$koleksi) {
            return redirect()->back();
        }

        return view('page.koleksi_detail', [
            'koleksi' => $koleksi,
            'next' => $next,
            'prev' => $previous
        ]);
    }

    public function data() {
        $data = Collection::orderBy('id', 'ASC')->paginate(12);

        return view('page.data', [
            'collections' => $data
        ]);
    }

    public function jurnal() {
        return view('page.jurnal');
    }

    public function jurnalDetail($id) {

        $data = Journal::find($id);

        if (!$data) {
            return redirect()->back();
        }

        return view('page.jurnal_detail', [
            'journal' => $data
        ]);
    }

    public function tentang() {
        return view('page.tentang');
    }

    public function submit() {
        return view('page.submit');
    }

    public function sendSubmit(Request $request) {

        $v = validator()->make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'instagram' => 'required',
            'story' => 'required',
            'type' => 'required',
            'file.*' => 'required|image|mimes:jpeg,bmp,png'
        ]);

        if ($v->fails()) {
            return redirect()->back()->withErrors($v);
        }

        $arsip = new ArchiveSubmit();
        $arsip->name = $request->input('name');
        $arsip->email = $request->input('email');
        $arsip->phone = $request->input('phone');
        $arsip->instagram = $request->input('instagram');
        $arsip->story = $request->input('story');
        $arsip->type = $request->input('type');

        $arsip->save();

        foreach($request->file('file') as $file) {
            $arsip->addMedia($file)->toMediaCollection('gallery');
        }

        $attachments = [];

        foreach($arsip->getMedia('gallery') as $gallery) {
            array_push($attachments, $gallery->getPath());
        }

        $this->dispatch(new SendEmail('patranto.prabowo@gmail.com', new EmailArsip($arsip->toArray(), $attachments)));

        return redirect()->back()->with('message', 'Success');

    }

}
