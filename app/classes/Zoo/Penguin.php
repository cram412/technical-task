<?php
namespace App\Zoo;

use App\Zoo\Animal\WalkInterface;
use App\Zoo\Animal\WalkTrait;

/**
 * Class Penguin
 * @package App\Zoo
 */
class Penguin extends AnimalAbstract implements WalkInterface
{
    use WalkTrait;

    /**
     * @var string
     */
    protected $_name = 'penguin';

    /**
     * @return $this
     */
    public function live()
    {
        return $this->walk()->pi()->walk();
    }
}