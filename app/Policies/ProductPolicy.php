<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\Response;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function index(User $user): Response|bool
    {
        return true;
    }

    public function view(User $user, Product $product): Response|bool
    {
        return true;
    }

    public function create(User $user): Response|bool
    {
        return $user->is_admin;
    }

    public function update(User $user, Product $product): Response|bool
    {
        return $user->is_admin;
    }

    public function delete(User $user, Product $product): Response|bool
    {
        return $user->is_admin;
    }
}
