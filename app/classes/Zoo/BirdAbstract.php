<?php
namespace Zoo;

/**
 * Class BirdAbstract
 * @package Zoo
 */
abstract class BirdAbstract extends AnimalAbstract
{
    /**
     * @return $this
     */
    abstract public function fly();

    /**
     * @return $this
     */
    abstract public function tweet();
}