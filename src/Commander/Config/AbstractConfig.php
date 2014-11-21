<?php
/**
 * Created by PhpStorm.
 * User: adamgrabek
 * Date: 21/11/14
 * Time: 18:05
 */

namespace Commander\Config;


abstract class AbstractConfig
{
    private $nodes;

    private $hashes;

    private $isLocked;

    abstract public function registerNode(Node $node);

    protected function recordNode(Node $node)
    {

    }

    /**
     * Locks config to be immutable and enables compilation
     */
    final public function lock()
    {
        $this->isLocked = TRUE;
    }

    /**
     * @return bool
     */
    public function isLocked()
    {
        return $this->isLocked;
    }

    public function compile()
    {

    }


} 