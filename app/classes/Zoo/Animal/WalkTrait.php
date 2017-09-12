<?php
namespace App\Zoo\Animal;

/**
 * Class WalkTrait
 * @package Zoo\Animal
 */
trait WalkTrait
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