@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.collection-category.actions.edit', ['name' => $collectionCategory->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <collection-category-form
                :action="'{{ $collectionCategory->resource_url }}'"
                :data="{{ $collectionCategory->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.collection-category.actions.edit', ['name' => $collectionCategory->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.collection-category.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </collection-category-form>

        </div>
    
</div>

@endsection