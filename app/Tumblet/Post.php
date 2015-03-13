<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/13/15
 * Time: 5:51 PM
 */

namespace Tumblet\Tumblet;


class Post {
    public $id;
    public $createdDate;
    public $link;

    public function __construct ($id, $createdDate, $link)
    {
        $this->id = $id;
        $this->createdDate = $createdDate;
        $this->link = $link;
    }
}