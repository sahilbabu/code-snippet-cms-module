<?php
/**
 * Created By Mudassar Ali
 *
 * @author      Mudassar Ali <sahil_bwp@yahoo.com>
 */
namespace Modules\Dashboard\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\Dashboard\Composers\WidgetViewComposer;

class WidgetServiceProvider extends ServiceProvider
{
    /**
     * @return void
     */
    public function register()
    {
        $this->app->singleton(WidgetViewComposer::class, function () {
            return new WidgetViewComposer();
        });

        $this->app['view']->composer('dashboard::admin.dashboard', WidgetViewComposer::class);
    }
}
