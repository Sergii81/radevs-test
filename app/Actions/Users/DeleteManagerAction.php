<?php

namespace App\Actions\Users;

use App\Interfaces\Repositories\UserRepositoryInterface;

class DeleteManagerAction
{
    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @param int $id
     * @return bool|null
     */
    public function execute(int $id): ?bool
    {
        return $this->userRepository->delete($id);
    }
}
