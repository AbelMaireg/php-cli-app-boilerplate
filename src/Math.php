<?php

/**
 * Math.php
 *
 * Provides mathematical operations for the CLI application.
 *
 * @package App
 */

namespace App;

/**
 * A class to perform basic mathematical operations.
 */
class Math
{
    /**
     * Adds two numbers.
     *
     * @param float $a The first number.
     * @param float $b The second number.
     * @return float The sum of the two numbers.
     */
    public function add(float $a, float $b): float
    {
        return $a + $b;
    }

    /**
     * Subtracts the second number from the first.
     *
     * @param float $a The first number.
     * @param float $b The second number to subtract.
     * @return float The difference between the two numbers.
     */
    public function subtract(float $a, float $b): float
    {
        return $a - $b;
    }

    /**
     * Multiplies two numbers.
     *
     * @param float $a The first number.
     * @param float $b The second number.
     * @return float The product of the two numbers.
     */
    public function multiply(float $a, float $b): float
    {
        return $a * $b;
    }

    /**
     * Divides the first number by the second.
     *
     * @param float $a The numerator.
     * @param float $b The denominator (must not be zero).
     * @return float The quotient of the division.
     * @throws \InvalidArgumentException If the denominator is zero.
     */
    public function divide(float $a, float $b): float
    {
        if ($b == 0) {
            throw new \InvalidArgumentException("Division by zero is not allowed.");
        }
        return $a / $b;
    }

    /**
     * Raises the base number to the specified exponent.
     *
     * @param float $base The base number.
     * @param float $exponent The exponent.
     * @return float The result of raising the base to the exponent.
     */
    public function power(float $base, float $exponent): float
    {
        return pow($base, $exponent);
    }
}
