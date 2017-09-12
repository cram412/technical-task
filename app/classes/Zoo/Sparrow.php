<?php
namespace App\Zoo;

use App\Zoo\Animal\FlyInterface;
use App\Zoo\Animal\WalkInterface;
use App\Zoo\Animal\WalkTrait;

/**
 * Class Sparrow
 * @package Zoo
 */
class Sparrow extends AnimalAbstract implements FlyInterface, WalkInterface
{
    use WalkTrait;

    /**
     * @var string
     */
    protected $_name = 'sparrow';

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
     * @return $this
     */
    public function tweet()
    {
        $this->_logger->log($this->_name . ' tweet');
        return $this;
    }

}