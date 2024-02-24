<?php

namespace App\Actions\Users;

use App\Interfaces\Repositories\UserRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;

class GetManagersAction
{
    /**
     * @param UserRepositoryInterface $userRepository
     */
    public function __construct(private readonly UserRepositoryInterface $userRepository)
    {
    }

    /**
     * @return Collection
     */
    public function execute(): Collection
    {
       return $this->userRepository->getManagers();
    }
}
