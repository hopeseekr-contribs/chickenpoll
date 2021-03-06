<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer(
            [
                '*'
            ],
            'App\Http\View\Composers\SiteSettingComposer'
        );

        View::composer(
            [
                'index'
            ],
            'App\Http\View\Composers\PostComposer'
        );

        View::composer(
            [
                'admin.role.edit',
                'admin.role.index',
            ],
            'App\Http\View\Composers\Admin\PermissionComposer'
        );

        View::Composer(
            [
                'admin.user.edit',
                'admin.role.edit',
            ],
            'App\Http\View\Composers\Admin\RoleComposer'
        );

        View::Composer(
            [
                'index',
                'list',
            ],
            'App\Http\View\Composers\PollComposer'
        );
    }
}
