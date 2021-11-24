<?php

    namespace Database\Factories;

    use Illuminate\Database\Eloquent\Factories\Factory;

    class AuthorFactory extends Factory
    {
        public function definition ()
        {
            return [
                "first_name" => "J. D.",
                "last_name" => "Salinger",
                "bio" => "His cloistered lifestyle and limited output have not prevented readers and writers from lionizing
                J. D. Salinger. With one-of-a-kind stories and the classic book The Catcher in the Rye, Salinger captured with
                wit and poignancy a growing malaise in post-war America. The 1951 novel The Catcher in the Rye, his best-known
                book, was an immediate success and remains popular and controversial. Salinger followed Catcher with Nine Stories,
                Franny and Zooey, and Raise High the Roof Beam, Carpenters and Seymour: An Introduction."
            ];
        }
    }
