<?php

namespace Zoo;

/**
 * Class Factory
 * @package Zoo
 */
class Factory
{
    /**
     * @param string $animal
     * @return bool|AnimalAbstract
     */
    public static function create($animal)
    {
        $className = '\\Zoo\\' . $animal;
        if (class_exists($className)) {
            $object = new $className;
            return $object;
        }
        return false;
    }
}