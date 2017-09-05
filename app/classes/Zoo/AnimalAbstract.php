<?php

namespace Zoo;

use Log\Logger;

/**
 * Class AnimalAbstract
 * @package Zoo
 */
abstract class AnimalAbstract {
    /**
     * @var string
     */
    protected $_name;

    /**
     * @var Logger
     */
    protected $_logger;

    /**
     * AnimalAbstract constructor.
     */
    public function __construct()
    {
        $this->_logger = Logger::getInstance();
    }

    /**
     * do live cycle
     * @return $this
     */
    abstract public function live();

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
        $this->_logger->log($this->_name . ': can\'t ' . $name, Logger::LOGGER_SCOPE_WARNING);
        return $this;
    }
}