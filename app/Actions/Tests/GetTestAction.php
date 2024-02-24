<?php

namespace App\Actions\Tests;

use App\Interfaces\Repositories\TestRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class GetTestAction
{
    /**
     * @param TestRepositoryInterface $testRepository
     */
    public function __construct(private readonly TestRepositoryInterface $testRepository)
    {
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function execute(int $id): ?Model
    {
        return $this->testRepository->getById($id);
    }
}
