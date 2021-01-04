<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.collection-category.columns.name') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.collection-category.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': fields.description && fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.collection-category.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.description" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('description'), 'form-control-success': fields.description && fields.description.valid}" id="description" name="description" placeholder="{{ trans('admin.collection-category.columns.description') }}">
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type_id'), 'has-success': fields.type_id && fields.type_id.valid }">
    <label for="type_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.collection-category.columns.type_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
{{--        <input type="text" v-model="form.type_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type_id'), 'form-control-success': fields.type_id && fields.type_id.valid}" id="type_id" name="type_id" placeholder="{{ trans('admin.collection-category.columns.type_id') }}">--}}
        <select type="text" v-model="form.type_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type_id'), 'form-control-success': fields.type_id && fields.type_id.valid}" id="type_id" name="type_id" placeholder="{{ trans('admin.collection-category.columns.type_id') }}">
            <option disabled selected>Choose Type</option>
            @foreach(\App\Models\CollectionType::all() as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>
            <div v-if="errors.has('type_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type_id') }}</div>
    </div>
</div>


