<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': fields.name && fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.config.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': fields.name && fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.config.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

{{--<div class="form-group row align-items-center" :class="{'has-danger': errors.has('type'), 'has-success': fields.type && fields.type.valid }">--}}
{{--    <label for="type" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.config.columns.type') }}</label>--}}
{{--        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">--}}
{{--        <input type="text" v-model="form.type" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('type'), 'form-control-success': fields.type && fields.type.valid}" id="type" name="type" placeholder="{{ trans('admin.config.columns.type') }}">--}}
{{--        <select>--}}
{{--            <option value="" disabled selected>Choose Type</option>--}}
{{--            <option value="content" disabled selected>Content</option>--}}
{{--            <option value="link" disabled selected>Link</option>--}}
{{--        </select>--}}
{{--        <div v-if="errors.has('type')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('type') }}</div>--}}
{{--    </div>--}}
{{--</div>--}}

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('content'), 'has-success': fields.content && fields.content.valid }">
    <label for="content" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.config.columns.content') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg class="form-control" v-model="form.content" v-validate="'required'" id="content" name="content" :config="mediaWysiwygConfig" />

{{--            <textarea class="form-control" v-model="form.content" v-validate="'required'" id="content" name="content"></textarea>--}}
        </div>
        <div v-if="errors.has('content')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('content') }}</div>
    </div>
</div>


