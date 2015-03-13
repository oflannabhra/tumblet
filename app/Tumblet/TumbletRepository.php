<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/12/15
 * Time: 6:39 PM
 */

namespace Tumblet\Tumblet;

use Illuminate\Foundation\Application;
use Tumblr\API\Client;

class TumbletRepository
{

    private $tumblrClient;

    public function __construct (Client $tumblrClient)
    {
        $this->tumblrClient = $tumblrClient;
    }

    public function getByName ($name)
    {
   $tumblet = new Tumblet(
       $name,
       $this->tumblrClient->getBlogInfo($name)->blog->title,
       $this->tumblrClient->getBlogInfo($name)->blog->posts);

        return $tumblet;
    }

}