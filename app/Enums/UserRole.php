<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Admin()
 * @method static static Manager()
 */
final class UserRole extends Enum
{
    public const Admin = 'admin';
    public const Manager = 'manager';

    public static function permissionsByRole(): array
    {
        return [
            self::Admin => [
                UserPermission::ManagerView,
                UserPermission::ManagerCreate,
                UserPermission::ManagerUpdate,
                UserPermission::ManagerDelete,
                UserPermission::TestView,
                UserPermission::TestCreate,
                UserPermission::TestUpdate,
                UserPermission::TestDelete,
            ],
            self::Manager => [
                UserPermission::TestUpdate,
            ]
        ];
    }
}
