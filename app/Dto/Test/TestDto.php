<?php

namespace App\Dto\Test;

use App\Actions\Tests\CalculateCriterionAction;
use Illuminate\Http\Request;

class TestDto
{

    public function __construct(
        private string $full_name,
        private string $test_date,
        private string $location,
        private ?int $score,
        private ?int $criterion,
        private int $manager_id,
    ) {
    }

    public static function fromRequest(Request $request)
    {
        /** @var CalculateCriterionAction $calculateAction */
        $calculateAction = app()->make(CalculateCriterionAction::class);

        return new static(
            full_name: $request->full_name,
            test_date: $request->test_date,
            location: $request->location,
            score: $request->score ?? null,
            criterion: $request->score ? $calculateAction->calculate($request->score) : null,
            manager_id: $request->manager_id,
        );
    }

    /**
     * @return int|null
     */
    public function getCriterion(): ?int
    {
        return $this->criterion;
    }

    /**
     * @return string
     */
    public function getFullName(): string
    {
        return $this->full_name;
    }

    /**
     * @return string
     */
    public function getLocation(): string
    {
        return $this->location;
    }

    /**
     * @return int
     */
    public function getManagerId(): int
    {
        return $this->manager_id;
    }

    /**
     * @return int|null
     */
    public function getScore(): ?int
    {
        return $this->score;
    }

    /**
     * @return string
     */
    public function getTestDate(): string
    {
        return $this->test_date;
    }

    /**
     * @return array
     */
    public function toArray(): array
    {
        return get_object_vars($this);
    }
}
