<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $admin =  \App\User::create([
            'name' => 'admin' ,
            'email' => 'admin@admin.com',
            'phone' => '0664421310',
            'password' => bcrypt('123456') ,
            'role' => 'superadmin' ,
            'active' => 1
        ]) ;
        $customer_user =  \App\User::create([
            'name' => 'customer' ,
            'email' => 'customer@customer.com',
            'phone' => '0123456789',
            'password' => bcrypt('123456') ,
            'role' => 'customer' ,
            'active' => 1
        ]) ;
        $customer =  \App\Customer::create([
            'user_id' => $customer_user->id ,
        ]) ;
       \App\Category::create([
            'name' =>'Appartements Et Maisons' ,

        ]) ;
        \App\Category::create([
            'name' =>'Vehicules' ,

        ]) ;
        \App\Category::create([
            'name' =>'Motocycles' ,

        ]) ;
        \App\Category::create([
            'name' =>'Autres' ,

        ]) ;

//        $ads =  \App\Ads::create([
//            'title' => 'prop 1' ,
//
//            'owner_phone' => '0123456789',
//
//
//
//        ]) ;
//        \App\Ads::create([
//            'title' => 'prop 2' ,
//            'owner_phone' => '0123456789',
//
//
//        ]) ;
//        \App\Ads::create([
//            'title' => 'prop 3' ,
//            'owner_phone' => '0123456789',
//
//
//        ]) ;

    }
}
