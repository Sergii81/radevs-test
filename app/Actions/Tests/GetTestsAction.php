<?php

namespace App\Actions\Tests;

use App\Interfaces\Repositories\TestRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetTestsAction
{
    /**
     * @param TestRepositoryInterface $testRepository
     */
    public function __construct(private readonly TestRepositoryInterface $testRepository)
    {
    }

    /**
     * @return Collection
     */
    public function execute(): Collection
    {
        return $this->testRepository->getAll();
    }
}
