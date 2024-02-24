<?php

namespace App\Actions\Tests;

use App\Dto\Test\TestDto;
use App\Interfaces\Repositories\TestRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UpdateTestAction
{
    public function __construct(private readonly TestRepositoryInterface $testRepository)
    {
    }

    /**
     * @param int $id
     * @param TestDto $dto
     * @return Model|null
     */
    public function execute(int $id, TestDto $dto): ?Model
    {
        return $this->testRepository->updateById($id, $dto->toArray());
    }
}
