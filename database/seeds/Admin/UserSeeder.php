<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app() [PermissionRegistrar::class]->forgetCachedPermissions();

        Permission::create(['name' => 'Create Post',    'guard_name' => 'create']);
        Permission::create(['name' => 'Edit Post',      'guard_name' => 'edit']);
        Permission::create(['name' => 'Delete Post',    'guard_name' => 'delete']);
        Permission::create(['name' => 'Publish Post',   'guard_name' => 'publish']);
        Permission::create(['name' => 'Unpublish Post', 'guard_name' => 'unpublish']);
        Permission::create(['name' => 'View Post',      'guard_name' => 'view']);

        $role1 = Role::create(['name' => 'Super Admin',         'guard_name' => 'superadmin']);
        $role2 = Role::create(['name' => 'Admin',               'guard_name' => 'admin']);
        $role3 = Role::create(['name' => 'Writer',              'guard_name' => 'writer']);
        $role4 = Role::create(['name' => 'Guest',               'guard_name' => 'guest']);

        $role1->givePermissionTo('Create Post');
        $role1->givePermissionTo('Edit Post');
        $role1->givePermissionTo('Delete Post');
        $role1->givePermissionTo('Publish Post');
        $role1->givePermissionTo('Unpublish Post');
        $role1->givePermissionTo('View Post');

        $role2->givePermissionTo('Create Post');
        $role2->givePermissionTo('Edit Post');
        $role2->givePermissionTo('Publish Post');
        $role2->givePermissionTo('Unpublish Post');
        $role2->givePermissionTo('View Post');

        $role3->givePermissionTo('Create Post');
        $role3->givePermissionTo('Edit Post');
        $role3->givePermissionTo('View Post');

        $role4->givePermissionTo('View Post');

        $user = Factory(User::class)->create([
            'name' => 'Super Admin',
            'user_name' => 'sadmin',
            'email' => 'admin@admin.web',
        ]);

        $user2 = Factory(User::class)->create([
            'name' => 'Admin',
            'user_name' => 'admin',
            'email' => 'user@admin.web'
        ]);

        $user->assignRole($role1);
        $user2->assignRole($role2);
    }
}
