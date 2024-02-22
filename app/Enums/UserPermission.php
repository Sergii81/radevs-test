<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static ManagerView()
 * @method static static ManagerCreate()
 * @method static static ManagerUpdate()
 * @method static static ManagerDelete()
 * @method static static TestView()
 * @method static static TestCreate()
 * @method static static TestUpdate()
 * @method static static TestDelete()
 */
final class UserPermission extends Enum
{
    public const ManagerView = 'manager_view';
    public const ManagerCreate = 'manager_create';
    public const ManagerUpdate = 'manager_update';
    public const ManagerDelete = 'manager_delete';

    public const TestView = 'test_view';
    public const TestCreate = 'test_create';
    public const TestUpdate = 'test_update';
    public const TestDelete = 'test_delete';
}
