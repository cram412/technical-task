<?php
namespace App\Zoo;

use App\Zoo\Animal\WalkInterface;
use App\Zoo\Animal\WalkTrait;

/**
 * Class Dog
 * @package Zoo
 */
class Dog extends AnimalAbstract implements WalkInterface
{
    use WalkTrait;

    /**
     * @var string
     */
    protected $_name = 'dog';

    /**
     * {@inheritdoc}
     */
    public function live()
    {
        return $this->walk()->run()->wuf()->byte('man');
    }

    /**
     * @return $this
     */
    public function wuf()
    {
        $this->_logger->log($this->_name . ' wuf');
        return $this;
    }

    /**
     * @param string $object
     * @return $this
     */
    public function byte($object)
    {
        $this->_logger->log($this->_name . ' has bitten ' . $object);
        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        $this->_logger->log($this->_name . ' run');
        return $this;
    }
}