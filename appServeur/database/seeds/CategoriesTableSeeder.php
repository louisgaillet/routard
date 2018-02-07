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
                'picture' => 'DHjnVbjvbcKoSiI0jlT9AKT7m5HfUtFiQPHdFcq6.png',
                'parent_id' => NULL,
                'created_at' => '2018-01-30 16:19:02',
                'updated_at' => '2018-02-02 12:15:25',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Hotel',
                'slug' => 'hotel',
                'picture' => NULL,
                'parent_id' => 1,
                'created_at' => '2018-01-30 16:19:09',
                'updated_at' => '2018-01-30 16:19:09',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Camping',
                'slug' => 'camping',
                'picture' => NULL,
                'parent_id' => 1,
                'created_at' => '2018-01-30 16:19:15',
                'updated_at' => '2018-01-30 16:19:15',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Auberge de jeunesse',
                'slug' => 'auberge-de-jeunesse',
                'picture' => NULL,
                'parent_id' => 1,
                'created_at' => '2018-01-31 09:01:23',
                'updated_at' => '2018-01-31 09:01:23',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Ou manger ?',
                'slug' => 'ou-manger',
                'picture' => 'SPcp7PHkz2sCju3jVKPQSmOmI3NMYhvkHuzsx4nB.png',
                'parent_id' => NULL,
                'created_at' => '2018-02-03 10:48:40',
                'updated_at' => '2018-02-05 10:10:28',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'A voir',
                'slug' => 'a-voir',
                'picture' => 'CnHv5xjoIoz3RxAnAfJAcqg67gMi9t9OhScVy4L2.png',
                'parent_id' => NULL,
                'created_at' => '2018-02-05 10:00:07',
                'updated_at' => '2018-02-05 10:09:04',
            ),
        ));
        
        
    }
}