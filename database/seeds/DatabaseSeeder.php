<?php

use App\Category;
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
            'name' =>'Autres' ,

        ]) ;


        for ($i=0;$i<3;$i++){


         $ads = \App\Ads::create([
             'title' => 'apartment '.$i ,
             'customer_id' => 1,
             'owner_phone' => '0664421310' ,
             'active' =>1 ,
             'category_id'=> Category::where('name','Appartements Et Maisons')->first()->id

         ]) ;
            $apartment =  \App\Apartment::create([
                'ads_id' => $ads->id,
                'price' => '120' ,
                'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles,',

            ]);

        }
        for ($i=0;$i<3;$i++){
            $ads = \App\Ads::create([
                'title' => 'car '.$i ,
                'customer_id' => 1,
                'owner_phone' => '0664421310' ,
                'active' =>1,
                'category_id'=> Category::where('name','Vehicules')->first()->id

            ]);
            $car =  \App\Car::create([
                'ads_id' =>$ads->id ,
                'price' => '120' ,
                'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles,',

            ]);

        }
        for ($i=0;$i<3;$i++){
            $ads = \App\Ads::create([
                'title' => 'autre ad '.$i ,
                'customer_id' => 1,
                'owner_phone' => '0664421310' ,
                'active' =>1 ,
                'category_id'=> Category::where('name','Autres')->first()->id
            ]);
            $other =  \App\Other::create([
                'ads_id' =>$ads->id ,
                'price' => '120' ,
                'description' => 'Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l\'imprimerie depuis les années 1500, quand un imprimeur anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n\'a pas fait que survivre cinq siècles,',

            ]);

        }

        \App\Settings::create([
            'website_name' =>'AMartil' ,
            'website_adr' =>'Website Address' ,
            'website_description' =>'Website description' ,
            'website_phone' =>'000000000' ,
            'website_facebook' =>'url' ,
            'website_twitter' =>'url' ,
            'website_youtube' =>'url' ,
            'website_instagram' =>'url' ,

        ]) ;
        for ($i=1;$i<6;$i++) {
            \App\SettingsPhoto::create([
                'filename' => 'img-0' . $i .'.jpg'
            ]);
        }
        for ($i=1;$i<4;$i++) {
            \App\Article::create([
                'title' => 'Article '.$i ,
                'content' => 'Content for article '.$i ,
                'img_url' => 'img-0' . $i .'.jpeg'
            ]);
        }

    }
}
