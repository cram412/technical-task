<?php
namespace Log;

/**
 * Class Logger
 * @package Log
 */
class Logger
{
    /**
     * Logger general scopes
     */
    const LOGGER_SCOPE_INFO = 0;
    const LOGGER_SCOPE_WARNING = 1;

    /**
     * @var array
     */
    protected static $_messages = [];

    /**
     * @var Logger|null
     */
    protected static $_instance;

    /**
     * @var string
     */
    protected static $_glue = '<br />';

    /**
     * prevent cloning
     */
    private function __clone() {}

    /**
     * prevent creating new instances
     */
    private function __construct() {}

    /**
     * @return Logger
     */
    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /**
     * @param string $string
     */
    public static function log($string, $scope = self::LOGGER_SCOPE_INFO)
    {
        if (empty($string)) {
            return;
        }
        self::$_messages[$scope][] = $string;
    }

    /**
     * Outputs logging messages
     */
    public static function renderLog($scope = self::LOGGER_SCOPE_INFO)
    {
        foreach (self::$_messages[$scope] as $message) {
            echo $message . self::$_glue;
        }

        self::$_messages[$scope] = [];
    }

    /**
     * Sets the glue for output
     *
     * @param string $glue
     */
    public static function setGlue($glue)
    {
        self::$_glue = $glue;
    }
}