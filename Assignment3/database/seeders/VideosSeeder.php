<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Videos;

class VideosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Videos::create(
        ["name"=>"How to install XAMPP on Ubuntu 20.04 / Ubuntu 18.04 (Linux)",
        "link"=>"https://youtu.be/R5CUn5wGQGg",
        "views"=>370687,
        "likes"=>4500,
        "comments"=>266]
        );

        Videos::create(
            ["name"=>"Jessica Brown-Findlay - Anyone who knows what love is. FULL version (Black Mirror)",
            "link"=>"https://youtu.be/qhea1U3v1_o",
            "views"=>6001676,
            "likes"=>59000,
            "comments"=>3905]
            );

        Videos::create(
            ["name"=>"Earth, Wind & Fire - Boogie Wonderland / (Intouchables)",
            "link"=>"https://youtu.be/ji-gH_yXjGo?list=RDMM",
            "views"=>55007419,
            "likes"=>441000,
            "comments"=>4128]
            );

        Videos::create(
            ["name"=>"Rachmaninov - Prelude in C Sharp Minor",
            "link"=>"https://youtu.be/wXQCPAR0EHo",
            "views"=>5069224,
            "likes"=>67000,
            "comments"=>2610]
            );

        Videos::create(
            ["name"=>"Fallen Angel",
            "link"=>"https://youtu.be/qU8tMdSVRBA",
            "views"=>663,
            "likes"=>61,
            "comments"=>16]
            );
        
    }
}
