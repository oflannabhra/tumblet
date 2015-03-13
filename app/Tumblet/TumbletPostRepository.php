<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/13/15
 * Time: 7:09 PM
 */

namespace Tumblet\Tumblet;


use Illuminate\Support\Collection;
use Tumblr\API\Client;

class TumbletPostRepository {

    private $client;

    public function __construct (Client $client)
    {
        $this->client = $client;
    }

    public function getPostsForTumbletAndPage (Tumblet $tumblet, $page)
    {
        $options = [
          'limit' => '10',
            'offset' => $page*10
        ];

        $posts = new Collection(
            $this->client->getBlogPosts($tumblet->name, $options)->posts
        );

        return $posts;
    }

}