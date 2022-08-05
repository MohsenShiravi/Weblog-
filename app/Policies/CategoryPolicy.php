<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Laratrust\Models\LaratrustPermission;
use Illuminate\Auth\Access\Response;
class CategoryPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        return $user->hasPermission('read-category')
            ? Response::allow()
            : Response::deny('دسترسی نمایش دسته بندی ها برای شما غیرفعال می باشد');;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category  $category
     * @return mixed
     */
    public function view(User $user, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $user->hasPermission('create-category')
             ? Response::allow()
            : Response::deny('شما مجاز به ایجاد دسته بندی نیستید');

    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category  $category
     * @return mixed
     */
    public function update(User $user, Category $category)
    {
        $isAuthorized = $user->hasPermission('update-category')
            && !empty($category);

        return $isAuthorized
            ? Response::allow()
            : Response::deny('شما مجاز به ویرایش دسته بندی ها نیستید');
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category  $category
     * @return mixed
     */
    public function delete(User $user, Category $category)
    {
        return $user->hasPermission('delete-category')
            && !empty($category)
            && $category->posts()->count() == 0
            ? Response::allow()
            : Response::deny('شما مجاز به حذف دسته بندی ها نیستید');;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category  $category
     * @return mixed
     */
    public function restore(User $user, Category $category)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Category  $category
     * @return mixed
     */
    public function forceDelete(User $user, Category $category)
    {
        //
    }
}