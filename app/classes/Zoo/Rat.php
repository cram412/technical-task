<?php
namespace Zoo;

/**
 * Class Rat
 * @package Zoo
 */
class Rat extends MammalAbstract
{
    /**
     * Rat constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->_name = 'rat';
    }

    /**
     * {@inheritdoc}
     */
    public function live()
    {
        return $this->pi();
    }
}