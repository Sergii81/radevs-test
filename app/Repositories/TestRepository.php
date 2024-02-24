<?php

namespace App\Repositories;

use App\Interfaces\Repositories\TestRepositoryInterface;
use App\Models\Test;
use App\Repositories\AbstractRepository;
use Illuminate\Database\Eloquent\Model;

class TestRepository extends AbstractRepository implements TestRepositoryInterface
{

    /**
     * @return Model
     */
    public function getModel(): Model
    {
        return new Test();
    }
}
