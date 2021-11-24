<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use App\Models\Author;

class AuthorSeeder extends Seeder
{

    public function run()
    {
        Author::factory(1)->create();
    }
}
