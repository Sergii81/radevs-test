<?php

namespace App\Actions\Users;

use App\Interfaces\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class GetManagerAction
{
    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @param int $id
     * @return Model|null
     */
    public function execute(int $id): ?Model
    {
        return $this->userRepository->getById($id);
    }
}
