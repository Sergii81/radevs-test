<?php

namespace App\Actions\Tests;

class CalculateCriterionAction
{
    /**
     * @param int|null $score
     * @return float|int|null
     */
    public function calculate(int $score = null): float|int|null
    {
        if ($score < 60) {
            $score = ceil($score * 100 / 60);
        } elseif ($score == 60) {
            $score = 100;
        } elseif ($score > 60 && $score < 80) {
            $score = $score * 5 - 200;
        } elseif ($score == 80) {
            $score = 200;
        } elseif ($score > 80 && $score < 90) {
            $score = $score * 10 - 600;
        } elseif ($score == 90) {
            $score = 300;
        } elseif ($score > 90 && $score < 100) {
            $score = $score * 20 - 1500;
        } elseif ($score == 100) {
            $score = 500;
        }

        return $score;
    }
}
