<?php

namespace App\Services;

use App\Enums\UserPermission;
use App\Enums\UserRole;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionsSetup
{
    /**
     * @return void
     */
    public static function permissionsSetup(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $permissions = [];
        foreach (UserPermission::getValues() as $permissionKey) {
            $permissions[$permissionKey] = app(Permission::class)->findOrCreate($permissionKey);
        }

        foreach (UserRole::permissionsByRole() as $roleKey => $permissionKeys) {
            /** @var Role $role */
            $role = app(Role::class)->findOrCreate($roleKey);

            foreach ($permissionKeys as $permissionKey) {
                if ($permissions[$permissionKey]->wasRecentlyCreated) {
                    $role->givePermissionTo($permissionKeys);
                }
            }
        }
    }
}
