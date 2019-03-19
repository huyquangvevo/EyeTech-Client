<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Permission;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'branch_id',
        'name',
        'email',
        'password',
        'active',
        'webservice_token',
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    public function getPermission()
    {
        $user_per = DB::table('permission_user')->where('user_id', $this->id)->first();
        $permission = Permission::find($user_per->permission_id);
        return $permission;
    }


    public function authorizeRoles($roles)
    {
        if (is_array($roles)) {
            return $this->hasAnyRole($roles) ||
                abort(401, 'This action is unauthorized.');
        }
        return $this->hasRole($roles) ||
            abort(401, 'This action is unauthorized.');
    }

    public function hasAnyRole($roles)
    {
        return null !== $this->permissions()->roles()->whereIn('name', $roles)->first();
    }

    public function hasRole($role)
    {
        return null !== $this->permissions()->roles()->where('name', $role)->first();
    }
}
