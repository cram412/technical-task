<?php
namespace App\Log;

/**
 * Interface LoggerInterface
 * @package Log
 */
interface LoggerInterface
{
    /**
     * Logger general scopes
     */
    const LOGGER_SCOPE_INFO = 0;
    const LOGGER_SCOPE_WARNING = 1;

    /**
     * @param string $string
     * @param int $scope one of the LOGGER_SCOPE_* constants
     * @return void
     */
    public function log($string, $scope = self::LOGGER_SCOPE_INFO);

    /**
     * Saves logs messages
     *
     * @return void
     */
    public function outputLog($scope = self::LOGGER_SCOPE_INFO);
}