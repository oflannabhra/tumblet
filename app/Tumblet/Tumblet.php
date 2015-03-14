<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/12/15
 * Time: 6:39 PM
 */

namespace Tumblet\Tumblet;


class Tumblet
{
    public $name;
    public $title;
    public $postTotal;
    public $postsPerPage = 10;

    public function __construct ($name, $title, $postTotal)
    {
        $this->name = $name;
        $this->title = $title;
        $this->postTotal = $postTotal;

    }
}