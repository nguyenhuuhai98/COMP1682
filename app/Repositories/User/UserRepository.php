<?php
namespace App\Repositories\User;

use App\Repositories\EloquentRepository;
use App\Models\User;

class UserRepository extends EloquentRepository implements UserRepositoryInterface
{

    public function getModel()
    {
        return User::class;
    }

    public function getUserNotAdmin()
    {
        return $this->model->whereNotIn('role_id', [1])->orderBy('id', 'DESC')->get();
    }
}
