<?php

namespace App\Repositories;

use App\Enums\UserRole;
use App\Interfaces\Repositories\UserRepositoryInterface;
use App\Models\User;
use App\Repositories\AbstractRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserRepository extends AbstractRepository implements UserRepositoryInterface
{

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return new User();
    }

    /**
     * @return mixed
     */
    public function getManagers(): Collection
    {
        return $this->getModel()::role(UserRole::Manager)->get();
    }
}
