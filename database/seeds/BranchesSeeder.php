<?php

use Illuminate\Database\Seeder;


use App\Branch; 


class BranchesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

            [
                'code' =>   'DM-01' ,
                'name' => 'Damascus Babylon Hotel', 
                'description' =>    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsam incidunt, officiis velit quaerat quo labore dolor odit consectetur porro deleniti dolores, accusamus voluptates molestias ad tempore rerum. Ad, labore.',
                'cover_front' => public_path('imgs/damascus.jpg')
            ],

            [
                'code' =>   'DM-02' , 
                'name' => 'Damascus Babylon Hotel',
                'description' =>    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsam incidunt, officiis velit quaerat quo labore dolor odit consectetur porro deleniti dolores, accusamus voluptates molestias ad tempore rerum. Ad, labore.',
                'cover_front' => public_path('imgs/damas2.jpg')
            ],
            [
                'code' =>   'LT-01' , 
                'name' => 'Latakia Babylon Hotel',
                'description' =>    'Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsam incidunt, officiis velit quaerat quo labore dolor odit consectetur porro deleniti dolores, accusamus voluptates molestias ad tempore rerum. Ad, labore.',
                'cover_front' => public_path('imgs/latakia.jpg')
            ]
            
        ];

        foreach($data as $record){

            Branch::create($record);
        }
    }
}
