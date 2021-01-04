<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.journal.columns.title') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.journal.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tags'), 'has-success': fields.tags && fields.tags.valid }">
    <label for="tags" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.journal.columns.tags') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        {{-- <input type="text" v-model="form.tags" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tags'), 'form-control-success': fields.tags && fields.tags.valid}" id="tags" name="tags" placeholder="{{ trans('admin.journal.columns.tags') }}"> --}}
            <multiselect v-model="form.tags" :options="tagsList" @tag="addTags" :multiple="true" :taggable="true" placeholder="Pick a value">
            </multiselect>
            <div v-if="errors.has('tags')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tags') }}</div>
    </div>
</div>



<div class="form-group row align-items-center" :class="{'has-danger': errors.has('content'), 'has-success': fields.content && fields.content.valid }">
    <label for="content" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.journal.columns.content') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg class="form-control" v-model="form.content" v-validate="'required'" id="content" name="content" :config="mediaWysiwygConfig" />
            {{--            <textarea ></textarea>--}}
        </div>
        <div v-if="errors.has('content')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('content') }}</div>
    </div>
</div>


@include('brackets/admin-ui::admin.includes.media-uploader', [
    'mediaCollection' => app(App\Models\Journal::class)->getMediaCollection('gallery'),
    // 'media' => $journal->getThumbs200ForCollection('gallery'),
    'label' => 'Banner'
])