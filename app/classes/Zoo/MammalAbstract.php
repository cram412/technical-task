<?php

namespace Zoo;

/**
 * Class MammalAbstract
 * @package Zoo
 */
abstract class MammalAbstract extends AnimalAbstract
{
    /**
     * @return $this
     */
    public function walk()
    {
        $this->_logger->log($this->_name . ' walk');
        return $this;
    }
}