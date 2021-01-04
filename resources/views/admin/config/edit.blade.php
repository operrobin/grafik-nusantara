@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.config.actions.edit', ['name' => $config->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <config-form
                :action="'{{ $config->resource_url }}'"
                :data="{{ $config->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.config.actions.edit', ['name' => $config->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.config.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </config-form>

        </div>
    
</div>

@endsection