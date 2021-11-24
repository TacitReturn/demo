<?php

    namespace Database\Factories;

    use Carbon\Carbon;
    use Illuminate\Database\Eloquent\Factories\Factory;
    use Illuminate\Support\Facades\Auth;

    class BookFactory extends Factory
    {
        public function definition ()
        {
            return [
                "author_id" => 1,
                "isbn" => "9780316769488",
                "title" => "The Catcher in the Rye",
                "overview" => "The 'brilliant, funny, meaningful novel' (The New Yorker) that established J. D. Salinger as
                a leading voice in American literature—and that has instilled in millions of readers around the world a
                 lifelong love of books.",
                "pages" => 240,
                "publisher" => "Little, Brown and Company",
                "publication_date" => Carbon::parse("05/01/1991"),
                "edition_description" => "Reprint",
                "lexile" => "790L",
                "sales_rank" => 554,
            ];
        }
    }
