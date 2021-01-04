<?php

namespace App\Providers;

use App\Models\EmailConfig;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;
use Swift_Mailer;
use Swift_SmtpTransport;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {


    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }

        $config = EmailConfig::all()->first();

        if ($config) {
            $config = array(
                'driver'     => $config->driver,
                'host'       => $config->host,
                'port'       => $config->port,
                'from'       => array('address' => $config->email, 'name' => 'Grafis Nusantara'),
                'encryption' => $config->encryption,
                'username'   => $config->username,
                'password'   => $config->password,
                'sendmail'   => '/usr/sbin/sendmail -bs',
                'pretend'    => false,
            );

            Config::set('mail', $config);
        }
    }
}
