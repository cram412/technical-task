<?php
namespace App\Zoo\Animal;

/**
 * Interface AnimalInterface
 * @package Zoo\Animal
 */
interface AnimalInterface
{
    /**
     * Execute live cycle
     *
     * @return string
     */
    public function live();

    /**
     * @param string $food
     * @return $this
     */
    public function eat($food = 'food');

    /**
     * @return $this
     */
    public function pi();
}