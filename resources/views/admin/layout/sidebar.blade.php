<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/categories') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.category.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/users') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.user.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/chapters') }}"><i class="nav-icon icon-diamond"></i> {{ trans('admin.chapter.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/giving-channels') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.giving-channel.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/giving-records') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.giving-record.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/account-types') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.account-type.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/accounts') }}"><i class="nav-icon icon-umbrella"></i> {{ trans('admin.account.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-user"></i> {{ __('Manage access') }}</a></li>
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-location-pin"></i> {{ __('Translations') }}</a></li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            {{--<li class="nav-item"><a class="nav-link" href="{{ url('admin/configuration') }}"><i class="nav-icon icon-settings"></i> {{ __('Configuration') }}</a></li>--}}
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
