@extends('layouts.app')

@section('style')

@endsection

@section('content')

    <div class="collection mx-sm-5">

        <div class="types">
            <a href="{{ url('koleksi') }}" class="label-type @empty($selectedType) active @endempty">Semua</a>
            
            @foreach(\App\Models\CollectionType::all() as $c)
                <a href="{{ url('koleksi?type=' . $c->id) }}" class="label-type @if($c->id == $selectedType->id) active @endif">{{ $c->name }}</a>
            @endforeach
        </div>

        <div class="categories">
            <a href="{{ url('koleksi?type=' . $selectedType->id) }}" class="label-categories @if($selectedCategory == null) active @endif">Semua</a>
            @foreach(\App\Models\CollectionCategory::where('type_id', $selectedType->id)->get() as $c)
                <a href="{{ url('koleksi?type=' . $selectedType->id . '&category=' . $c->id) }}" class="label-categories @if($c->id == (empty($selectedCategory) ? 0:$selectedCategory->id)) active @endif">{{ $c->name }}</a>
            @endforeach
        </div>

    </div>

    <div class="row content-container">
        @foreach($data as $c)

            <div class="col-6 col-sm-3">

                <a href="{{ route('koleksiDetail', $c->id) }}">
                    <div class="square">

                        <div class="info d-none d-sm-block">

                            <div class="info-container">

                                <div class="title">
                                    {{ $c->name }}
                                </div>

                                <div class="description">
                                    {{ $c->Category->Type->name }} - {{ $c->Category->name }}
                                </div>

                            </div>

                        </div>

                        <img src="{{ $c->getMedia('gallery')[0]->getUrl() }}"/>
                    </div>
                </a>
            </div>
        @endforeach
    </div>

    <div class="pagination-footer">
        {{ $data->links() }}
    </div>

@endsection
