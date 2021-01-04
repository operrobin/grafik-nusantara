<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/collection-types') }}"><i class="nav-icon icon-plane"></i> Types</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/collection-categories') }}"><i class="nav-icon icon-puzzle"></i> Categories</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/collections') }}"><i class="nav-icon icon-star"></i> {{ trans('admin.collection.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/journals') }}"><i class="nav-icon icon-magnet"></i> {{ trans('admin.journal.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/configs') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.config.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/email-configs') }}"><i class="nav-icon icon-book-open"></i> {{ trans('admin.email-config.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
{{--            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>--}}
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
