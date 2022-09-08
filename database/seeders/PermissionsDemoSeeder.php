<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsDemoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create requests']);
        Permission::create(['name' => 'issue requests']);
        Permission::create(['name' => 'edit requests']);
        Permission::create(['name' => 'delete requests']);

        $role1 = Role::create(['name' => 'Super Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create roles and assign existing permissions
        $role2 = Role::create(['name' => 'Admin']);
        $role2->givePermissionTo('create requests');
        $role2->givePermissionTo('issue requests');
        $role2->givePermissionTo('edit requests');
        $role2->givePermissionTo('delete requests');

        $role3 = Role::create(['name' => 'Agent']);
        $role3->givePermissionTo('create requests');
        $role3->givePermissionTo('issue requests');
        $role3->givePermissionTo('edit requests');
        $role3->givePermissionTo('delete requests');

        $role4 = Role::create(['name' => 'Staff']);
        $role4->givePermissionTo('create requests');
        $role4->givePermissionTo('issue requests');
        $role4->givePermissionTo('edit requests');
        $role4->givePermissionTo('delete requests');

        $role5 = Role::create(['name' => 'Costumer']);
        $role5->givePermissionTo('create requests');

        // create demo users
        $user = User::factory()->create([
            'displayname' => 'Manoochehr Totonchi',
            'username' => 'roniadmin',
            'email' => 'info@ronireklam.com',
            'email_verified_at' => now(),
            'password' => Hash::make('13012015@Ako'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($role1);

        $user = User::factory()->create([
            'displayname' => 'Example Admin User',
            'username' => 'admin',
            'email' => 'admindemo@aliacarpanel.com',
            'email_verified_at' => now(),
            'password' => Hash::make('13012015@Ako'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($role2);

        $user = User::factory()->create([
            'displayname' => 'Example Agent User',
            'username' => 'agent',
            'email' => 'agent@aliacarpanel.com',
            'email_verified_at' => now(),
            'password' => Hash::make('demo'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($role3);

        $user = User::factory()->create([
            'displayname' => 'Example Staff User',
            'username' => 'staff',
            'email' => 'staff@aliacarpanel.com',
            'email_verified_at' => now(),
            'password' => Hash::make('demo'), // password
            'remember_token' => Str::random(10),
        ]);
        $user->assignRole($role4);

        $demo = User::factory()->create([
            'displayname' => 'Demo User',
            'username' => 'demo',
            'email' => 'demo@aliacarpanel.com',
            'email_verified_at' => now(),
            'password' => Hash::make('demo'), // password
            'remember_token' => Str::random(10),
        ]);
        $demo->assignRole($role5);


    }
}
