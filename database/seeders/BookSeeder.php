<?php

    namespace Database\Seeders;

    use Carbon\Carbon;
    use Illuminate\Database\Seeder;
    use App\Models\Book;

    class BookSeeder extends Seeder
    {
        public function run ()
        {
            $items = [
                [
                    "author_id" => 1,
                    "isbn" => "9780316769488",
                    "title" => "The Catcher in the Rye",
                    "overview" => "The 'brilliant, funny, meaningful novel' (The New Yorker) that established J. D. Salinger as a leading voice in American literature—and that has instilled in millions of readers around the world a lifelong love of books.",
                    "pages" => 240,
                    "publisher" => "Little, Brown and Company",
                    "publication_date" => Carbon::parse("05/01/1991"),
                    "edition_description" => "Reprint",
                    "lexile" => "790L",
                    "sales_rank" => 554,
                ],
                [
                    "author_id" => 1,
                    "isbn" => "9780316769495",
                    "title" => "Franny and Zooey",
                    "overview" => "'Perhaps the best book by the foremost stylist of his generation' (New York Times), J. D. Salinger's Franny and Zooey collects two works of fiction about the Glass family originally published in The New Yorker.",
                    "pages" => 176,
                    "publisher" => "Little, Brown and Company",
                    "publication_date" => Carbon::parse("05/01/2013"),
                    "edition_description" => "Reprint",
                    "lexile" => "990L",
                    "sales_rank" => 29935,
                ]
            ];

            Book::insert($items);
        }
    }
