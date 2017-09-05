<?php
namespace Zoo;

/**
 * Class Sparrow
 * @package Zoo
 */
class Sparrow extends BirdAbstract
{
    /**
     * Sparrow constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_name = 'sparrow';
    }

    /**
     * {@inheritdoc}
     */
    public function live()
    {
        return $this->walk()->tweet()->fly();
    }

    /**
     * {@inheritdoc}
     */
    public function fly()
    {
        $this->_logger->log($this->_name . ' fly');
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function tweet()
    {
        $this->_logger->log($this->_name . ' tweet');
        return $this;
    }

}