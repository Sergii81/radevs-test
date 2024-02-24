<?php

namespace App\Actions\Tests;

use App\Dto\Test\TestDto;
use App\Interfaces\Repositories\TestRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class CreateTestAction
{
    /**
     * @param TestRepositoryInterface $testRepository
     */
    public function __construct(private readonly TestRepositoryInterface $testRepository)
    {
    }

    /**
     * @param TestDto $dto
     * @return Model
     */
    public function execute(TestDto $dto): Model
    {
        return $this->testRepository->create($dto->toArray());
    }
}
