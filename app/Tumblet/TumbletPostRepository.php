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
use Tumblet\Exceptions\EmptyTumbletException;
use Tumblet\Exceptions\PageOutOfRangeException;

class TumbletPostRepository {

    private $client;

    public function __construct (Client $client)
    {
        $this->client = $client;
    }

    public function getPostsForTumbletAndPage (Tumblet $tumblet, $page)
    {
        $options = [
          'limit' => $tumblet->postsPerPage,
            'offset' => ($page-1)*10
        ];

        $postsArray = $this->client->getBlogPosts($tumblet->name, $options)->posts;
        $posts= [];

        if($tumblet->postTotal == 0) {
            throw new EmptyTumbletException ($tumblet->name, 'Tumblr has no posts for this blog');
        }elseif($page > ceil($tumblet->postTotal/$tumblet->postsPerPage) || $page < 1) {
            throw new PageOutOfRangeException ($tumblet->name, $page);
        }

        foreach ($postsArray as $postData) {
            array_push($posts, new Post(
                $postData->id,
                new Carbon($postData->date),
                $postData->post_url
                ));
        }

        return new Collection($posts);
    }

}