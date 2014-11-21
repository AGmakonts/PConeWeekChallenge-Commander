<?php
/**
 * Created by PhpStorm.
 * User: adamgrabek
 * Date: 21/11/14
 * Time: 18:54
 */

namespace Commander\Config\Exception;


class CompilerException extends \DomainException
{
    const CONFIG_NOT_LOCKED = 1;

    function __construct($error)
    {
        
    }

} 