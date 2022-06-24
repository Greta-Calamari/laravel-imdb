<?php

use Illuminate\Database\Seeder;
use App\Genre;
use Illuminate\Support\Str;


class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genres = ['avventura','azione','horror','fantasy','fantascenza','thriller','drammatico','romantico'];
        
        foreach($genres as $item){
            $newGenre = new Genre();
            $newGenre->name=$item; 
            $newGenre->slug=Str::of($newGenre->name)->slug('-'); 
            $newGenre->save();

        }
    }
}
