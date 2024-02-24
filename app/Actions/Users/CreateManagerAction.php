<?php

namespace App\Actions\Users;

use App\Dto\User\CreateManagerDto;
use App\Enums\UserRole;
use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class CreateManagerAction
{

    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @param CreateManagerDto $dto
     * @return Model
     */
    public function execute(CreateManagerDto $dto): Model
    {
        /** @var User $manager */
        $manager = $this->userRepository->create($dto->toArray());

        $manager->syncRoles([UserRole::Manager]);

        return $manager;
    }
}
