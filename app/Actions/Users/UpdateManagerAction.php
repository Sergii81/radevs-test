<?php

namespace App\Actions\Users;

use App\Dto\User\UpdateManagerDto;
use App\Interfaces\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Model;

class UpdateManagerAction
{

    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @param int $id
     * @param UpdateManagerDto $dto
     * @return Model|null
     */
    public function execute(int $id, UpdateManagerDto $dto): ?Model
    {
        return $this->userRepository->updateById($id, $dto->toArray());
    }
}
