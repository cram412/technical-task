<?php
namespace App\Zoo;

/**
 * Class Rat
 * @package Zoo
 */
class Rat extends AnimalAbstract
{
    /**
     * @var string
     */
    protected $_name = 'rat';

    /**
     * {@inheritdoc}
     */
    public function live()
    {
        return $this->pi();
    }
}