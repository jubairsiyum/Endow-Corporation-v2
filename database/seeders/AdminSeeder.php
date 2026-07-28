<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        $permissions = [
            'view posts', 'create posts', 'edit posts', 'delete posts',
            'view categories', 'create categories', 'edit categories', 'delete categories',
            'view appointments', 'edit appointments', 'delete appointments',
            'view contact messages', 'edit contact messages', 'delete contact messages',
            'view newsletters', 'edit newsletters', 'delete newsletters',
            'view users', 'create users', 'edit users', 'delete users',
            'view roles', 'create roles', 'edit roles', 'delete roles',
        ];

        foreach ($permissions as $perm) {
            Permission::findOrCreate($perm);
        }

        $superAdmin = Role::findOrCreate('Super Admin');
        $superAdmin->givePermissionTo(Permission::all());

        $editor = Role::findOrCreate('Editor');
        $editor->givePermissionTo([
            'view posts', 'create posts', 'edit posts', 'delete posts',
            'view categories', 'create categories', 'edit categories',
            'view appointments', 'edit appointments',
            'view contact messages', 'edit contact messages',
            'view newsletters', 'edit newsletters',
        ]);

        $viewer = Role::findOrCreate('Viewer');
        $viewer->givePermissionTo([
            'view posts',
            'view categories',
            'view appointments',
            'view contact messages',
            'view newsletters',
        ]);

        $adminUser = User::updateOrCreate(
            ['email' => 'admin@endowcorporation.com'],
            [
                'name' => 'Admin',
                'password' => bcrypt('admin123'),
                'email_verified_at' => now(),
            ]
        );
        $adminUser->assignRole('Super Admin');

        $categories = [
            ['name' => 'General', 'color' => '#6B7280', 'sort_order' => 1],
            ['name' => 'Travel', 'color' => '#3B82F6', 'sort_order' => 2],
            ['name' => 'Education', 'color' => '#10B981', 'sort_order' => 3],
            ['name' => 'Technology', 'color' => '#F59E0B', 'sort_order' => 4],
            ['name' => 'Healthcare', 'color' => '#EF4444', 'sort_order' => 5],
        ];

        foreach ($categories as $cat) {
            Category::updateOrCreate(
                ['slug' => str($cat['name'])->slug()],
                $cat
            );
        }
    }
}
