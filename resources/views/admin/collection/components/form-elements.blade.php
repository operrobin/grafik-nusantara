
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.collection.columns.name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.collection.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>
<div class="form-group row align-items-center" :class="{'has-danger': errors.has('category_id'), 'has-success': fields.category_id && fields.category_id.valid }">
    <label for="category_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.collection.columns.category_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
{{--        <input type="text" v-model="form.category_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('category_id'), 'form-control-success': fields.category_id && fields.category_id.valid}" id="category_id" name="category_id" placeholder="{{ trans('admin.collection.columns.category_id') }}">--}}
        <select v-model="form.category_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('category_id'), 'form-control-success': fields.category_id && fields.category_id.valid}" id="category_id" name="category_id">
            <option disabled selected value="">Choose Category</option>
            @foreach(\App\Models\CollectionCategory::all() as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>

        <div v-if="errors.has('category_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('category_id') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('created_when'), 'has-success': fields.created_when && fields.created_when.valid }">
    <label for="created_when" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Year of Created</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.created_when" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('created_when'), 'form-control-success': fields.created_when && fields.created_when.valid}" id="created_when" name="created_when" placeholder="{{ trans('admin.collection.columns.created_when') }}">
        <div v-if="errors.has('created_when')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('created_when') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('created_who'), 'has-success': fields.created_who && fields.created_who.valid }">
    <label for="created_who" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">Submit By Who</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.created_who" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('created_who'), 'form-control-success': fields.created_who && fields.created_who.valid}" id="created_who" name="created_who" placeholder="{{ trans('admin.collection.columns.created_who') }}">
        <div v-if="errors.has('created_who')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('created_who') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.collection.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.collection.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Collection::class)->getMediaCollection('gallery'),
    'media' => !empty($collection) ? $collection->getThumbs200ForCollection('gallery'):null,
    'label' => 'Image'
])




