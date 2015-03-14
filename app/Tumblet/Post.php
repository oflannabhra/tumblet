<?php
/**
 * Created by PhpStorm.
 * User: benflannery
 * Date: 3/13/15
 * Time: 5:51 PM
 */

namespace Tumblet\Tumblet;


use Carbon\Carbon;

class Post {
    public $id;

    /**
     * @var Carbon
     */
    public $createdDate;
    public $link;

    public function __construct ($id, Carbon $createdDate, $link)
    {
        $this->id = $id;
        $this->createdDate = $createdDate;
        $this->link = $link;
    }
}