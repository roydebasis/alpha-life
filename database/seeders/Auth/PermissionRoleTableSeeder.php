<?php

namespace Database\Seeders\Auth;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

/**
 * Class PermissionRoleTableSeeder.
 */
class PermissionRoleTableSeeder extends Seeder
{
    /**
     * Run the database seed.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        // Create Roles
        $super_admin = Role::create(['name' => 'super admin']);
        $admin = Role::create(['name' => 'administrator']);
        $manager = Role::create(['name' => 'manager']);
        $executive = Role::create(['name' => 'executive']);
        $user = Role::create(['name' => 'user']);

        // Create Permissions
        Permission::firstOrCreate(['name' => 'view_backend']);
        Permission::firstOrCreate(['name' => 'edit_settings']);
        Permission::firstOrCreate(['name' => 'view_logs']);

        $permissions = Permission::defaultPermissions();

        foreach ($permissions as $perms) {
            Permission::firstOrCreate(['name' => $perms]);
        }

        \Artisan::call('auth:permission', [
            'name' => 'posts',
        ]);
        echo "\n _Posts_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'categories',
        ]);
        echo "\n _Categories_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'tags',
        ]);
        echo "\n _Tags_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'comments',
        ]);
        echo "\n _Comments_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'services',
        ]);
        \Artisan::call('auth:permission', [
            'name' => 'service_category',
        ]);
        echo "\n _Services_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'claims',
        ]);
        echo "\n _claims_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'hospitals',
        ]);
        echo "\n _Hospitals_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'media',
        ]);
        echo "\n _media_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'teams',
        ]);
        echo "\n _teams_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'designations',
        ]);
        echo "\n _designations_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'pages',
        ]);
        echo "\n _pages_ Permissions Created.";

        \Artisan::call('auth:permission', [
            'name' => 'menu',
        ]);
        echo "\n _menu_ Permissions Created.";

        echo "\n\n";

        // Assign Permissions to Roles
        $admin->givePermissionTo(Permission::all());
        $manager->givePermissionTo('view_backend');
        $executive->givePermissionTo('view_backend');

        Schema::enableForeignKeyConstraints();
    }
}
