<?php

use Illuminate\Database\Seeder;
use App\Comic;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');
        foreach($comics as $comic){
            $row=new Comic();
            $row['title']=$comic['title'];
            $row['description']=$comic['description'];
            $row['thumb']=$comic['thumb'];
            $row['price']=$comic['price'];
            $row['series']=$comic['series'];
            $row['sale_date']=$comic['sale_date'];
            $row['type']=$comic['type'];
            $row->save();
        }
    }
}
