<?php
namespace App\Zoo;

use App\Zoo\Animal\WalkInterface;
use App\Zoo\Animal\WalkTrait;

/**
 * Class Cat
 * @package Zoo
 */
class Cat extends AnimalAbstract implements WalkInterface
{
    use WalkTrait;

    /**
     * @var string
     */
    protected $_name = 'cat';

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