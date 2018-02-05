<?php

use Illuminate\Database\Seeder;

class GuidesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('guides')->delete();
        
        \DB::table('guides')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Iceland',
                'slug' => 'iceland300120183634',
                'picture' => '07FJ1H4JzATQzDm0XdwA0gx1oWFRj63SWenj9liI.jpeg',
                'created_at' => '2018-01-30 09:36:34',
                'updated_at' => '2018-01-30 09:36:34',
            ),
        ));
        
        
    }
}