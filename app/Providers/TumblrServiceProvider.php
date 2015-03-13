<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/12/15
 * Time: 9:51 PM
 */

namespace Tumblet\Providers;

use Illuminate\Support\ServiceProvider;
use Tumblr\API\Client;

class TumblrServiceProvider extends ServiceProvider{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Tumblr\API\Client', function () {
            return new Client(env('TUMBLR_API_KEY'));
        });
    }
}