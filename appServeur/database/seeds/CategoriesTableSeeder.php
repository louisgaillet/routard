<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Ou dormir ?',
                'slug' => 'ou-dormir',
                'parent_id' => NULL,
                'created_at' => '2018-01-30 16:19:02',
                'updated_at' => '2018-01-30 16:19:02',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hotel',
                'slug' => 'hotel',
                'parent_id' => 1,
                'created_at' => '2018-01-30 16:19:09',
                'updated_at' => '2018-01-30 16:19:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Camping',
                'slug' => 'camping',
                'parent_id' => 1,
                'created_at' => '2018-01-30 16:19:15',
                'updated_at' => '2018-01-30 16:19:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Auberge de jeunesse',
                'slug' => 'auberge-de-jeunesse',
                'parent_id' => 1,
                'created_at' => '2018-01-31 09:01:23',
                'updated_at' => '2018-01-31 09:01:23',
            ),
        ));
        
        
    }
}