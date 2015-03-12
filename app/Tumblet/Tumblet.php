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
    
    public function __construct ($name)
    {
        $this->name = $name;
    }

}