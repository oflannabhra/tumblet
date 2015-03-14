<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/13/15
 * Time: 7:09 PM
 */

namespace Tumblet\Tumblet;


use Carbon\Carbon;
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
            'offset' => ($page-1)*10
        ];

        $postsArray = $this->client->getBlogPosts($tumblet->name, $options)->posts;
        $posts= [];

        foreach ($postsArray as $postData) {
            array_push($posts, new Post(
                $postData->id,
                new Carbon($postData->date),
                $postData->post_url
                ));
        }
        $posts = new Collection($posts);
        return $posts;
    }

}