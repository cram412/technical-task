<?php
namespace App\Log;

/**
 * Class Logger
 * @package Log
 */
class HtmlLogger implements LoggerInterface
{
    /**
     * @var array
     */
    protected $_messages = [];

    /**
     * @var string
     */
    protected $_glue = '<br />';

    /**
     * @param string $string
     */
    public function log($string, $scope = self::LOGGER_SCOPE_INFO)
    {
        if (empty($string)) {
            return;
        }
        $this->_messages[$scope][] = $string;
    }

    /**
     * Outputs logging messages
     */
    public function outputLog($scope = self::LOGGER_SCOPE_INFO)
    {
        foreach ($this->_messages[$scope] as $message) {
            echo $message . $this->_glue;
        }

        $this->_messages[$scope] = [];
    }

    /**
     * Sets the glue for output
     *
     * @param string $glue
     */
    public function setGlue($glue)
    {
        $this->_glue = $glue;
    }
}