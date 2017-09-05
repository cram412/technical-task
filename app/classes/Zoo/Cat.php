<?php
namespace Zoo;

/**
 * Class Cat
 * @package Zoo
 */
class Cat extends MammalAbstract
{
    /**
     * Cat constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_name = 'cat';
    }

    /**
     * {@inheritdoc}
     */
    public function live()
    {
        return $this->walk()->meow();
    }

    /**
     * @return $this
     */
    public function meow()
    {
        $this->_logger->log($this->_name . ' meow');
        return $this;
    }
}