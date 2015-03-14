<?php
/**
 * Created by PhpStorm.
 * User: meph
 * Date: 3/14/15
 * Time: 3:56 PM
 */

namespace Tumblet\Exceptions;

use \Exception;

class PageOutOfRangeException extends Exception {
    public function __construct ($tumbletName, $page)
    {
        parent::__construct("Page #{$page} is out of range for blog '{$tumbletName}'");
    }
}