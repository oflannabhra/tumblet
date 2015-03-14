<?php
/**
 * Created by PhpStorm.
 * User: meph
 * Date: 3/14/15
 * Time: 3:56 PM
 */

namespace Tumblet\Exceptions;

use \Exception;

class EmptyTumbletException extends Exception {
    public function __construct ($tumbletName, $message)
    {
        parent::__construct("Error retrieving posts for '{$tumbletName}': {$message}");
    }
}