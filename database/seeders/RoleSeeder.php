<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
 
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Editor']);
        $role3 = Role::create(['name' => 'Subscriber']);


        Permission::create(['name' => 'admin.home', 'description' => 'Dashboard'])->syncRoles([$role1, $role2]);

        Permission::create(['name' => 'admin.users.index', 'description' => 'Users (List)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit', 'description' => 'Users (Role)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update', 'description' => 'Users (Update)'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.roles.index', 'description' => 'Role (List)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.create', 'description' => 'Role (Create)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit', 'description' => 'Role (Edit)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy', 'description' => 'Role (Delete)'])->syncRoles([$role1]);
        

        Permission::create(['name' => 'admin.categories.index', 'description' => 'Category (List)'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create', 'description' => 'Category (Create)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit', 'description' => 'Category (Edit)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy', 'description' => 'Category (Delete)'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.tags.index', 'description' => 'Tags (List)'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create', 'description' => 'Tag (Create)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit', 'description' => 'Tag (Edit)'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy', 'description' => 'Tag (Delete)'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.posts.index', 'description' => 'File (List)'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create', 'description' => 'File (Create)'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit', 'description' => 'File (Edit)'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy', 'description' => 'File (Detele)'])->syncRoles([$role1]);
    }
}
