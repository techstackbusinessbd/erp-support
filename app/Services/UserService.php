<?php

namespace App\Services;

use App\Models\User;

class UserService
{
    public function createUser(array $data, ?array $roles = null): User
    {
        $data['password'] = bcrypt($data['password']);
        $user = User::create($data);

        if ($roles) {
            $user->assignRole($roles);
        }

        return $user;
    }

    public function updateUser(User $user, array $data, ?array $roles = null): User
    {
        if (isset($data['password']) && !empty($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        } else {
            unset($data['password']);
        }

        $user->update($data);

        if ($roles !== null) {
            $user->syncRoles($roles);
        }

        return $user;
    }
}
