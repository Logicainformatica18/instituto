<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
//agregar hash
use Illuminate\Support\Facades\Hash;
use App\User;
class PermissionsSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $permissions_array=[];
        array_push($permissions_array,Permission::create(['name' => 'create_cursos']));
        array_push($permissions_array,Permission::create(['name' => 'edit_cursos']));
        array_push($permissions_array,Permission::create(['name' => 'delete_cursos']));
        $viewCoursesPermissions=Permission::create(['name' => 'view_cursos']);
        array_push($permissions_array,$viewCoursesPermissions);
        $adminRole = Role::create(['name' => 'admin']);
        $adminRole->syncPermissions($permissions_array);
        $viewCoursesRole=Role::create(['name' => 'viewCourse']);
        $viewCoursesRole->givePermissionTo($viewCoursesPermissions);
    // create user
        $userAdmin= User::create([
            'dni' => '44444444',
            'firstname' => 'Cardenas',
            'lastname' => 'Aquino',
            'names' => 'Anthony Robert',
            'password' => Hash::make('admin'),
            'datebirth' => '2000-10-10',
            'cellphone' => '999999999',
            'sex' => 'M',
            'email' => 'logicainformatica18@gmail.com',
        ]);
        //asignar rol
        $userAdmin->assignRole('admin');
        //create user
        // $userView= User::create([
        //     'name' => 'test',
        //     'email' => 'test@gmail.com',
        //     'password' => Hash::make('admin'),
        // ]);
        // //asignar rol
        // $userView->assignRole('viewCourse');
    }
}
