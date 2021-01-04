@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.email-config.actions.edit', ['name' => $emailConfig->email]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <email-config-form
                :action="'{{ $emailConfig->resource_url }}'"
                :data="{{ $emailConfig->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.email-config.actions.edit', ['name' => $emailConfig->email]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.email-config.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </email-config-form>

        </div>
    
</div>

@endsection