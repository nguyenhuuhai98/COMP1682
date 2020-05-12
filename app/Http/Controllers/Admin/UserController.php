<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\UserRequest;
use App\Repositories\User\UserRepositoryInterface;
use Faker\Factory;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->getUserNotAdmin();

        return view('admin.pages.user.users', [
            'users' => $users,
        ]);
    }

    public function store(UserRequest $request)
    {
        $faker = Factory::create();
        $user = [
            'name' => $request->userName,
            'phone' => $request->phone,
            'email' => $request->email,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'address' => $request->address,
            'role_id' => $request->role,
            'code' => $faker->ean13,
        ];
        $user = $this->userRepository->create($user);
        $user->role = $user->role->name;

        return response()->json($user);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
