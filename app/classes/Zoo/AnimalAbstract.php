<?php

namespace App\Zoo;

use App\Log\LoggerInterface;
use App\Zoo\Animal\AnimalInterface;

/**
 * Class AnimalAbstract
 * @package Zoo
 */
abstract class AnimalAbstract implements AnimalInterface
{
    /**
     * @var string
     */
    protected $_name;

    /**
     * @var LoggerInterface
     */
    protected $_logger;

    /**
     * AnimalAbstract constructor.
     */
    public function __construct(LoggerInterface $logger)
    {
        $this->_logger = $logger;
    }

    /**
     * @param string $food
     * @return $this
     */
    public function eat($food = 'food')
    {
        if (empty($food)) {
            return $this;
        }
        $this->_logger->log($this->_name . ' eat ' . $food);
        return $this;
    }

    /**
     * @return $this
     */
    public function pi()
    {
        $this->_logger->log($this->_name . ' pi');
        return $this;
    }

    /**
     * Override default behaviour to prevent errors
     *
     * @param string $name
     * @param array $arguments
     * @return $this
     */
    public function __call($name, $arguments)
    {
        $this->_logger->log($this->_name . ': can\'t ' . $name, LoggerInterface::LOGGER_SCOPE_WARNING);
        return $this;
    }
}