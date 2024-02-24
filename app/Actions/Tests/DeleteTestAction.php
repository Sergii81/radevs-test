<?php

namespace App\Actions\Tests;

use App\Interfaces\Repositories\TestRepositoryInterface;

class DeleteTestAction
{
    /**
     * @param TestRepositoryInterface $testRepository
     */
    public function __construct(private readonly TestRepositoryInterface $testRepository)
    {
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function execute(int $id): ?bool
    {
        return $this->testRepository->delete($id);
    }
}
