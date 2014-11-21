<?php
/**
 * Created by PhpStorm.
 * User: adamgrabek
 * Date: 21/11/14
 * Time: 18:46
 */

namespace Commander\Config;


class Compiler
{
    private $destination;

    private $config;

    public function __construct(AbstractConfig $config)
    {
        if(FALSE === $config->isLocked()) {

        }
    }


} 