<?php

    namespace App\Virtual\Models;

    /**
     * @OA\Schema(
     *     title="App\Virtual\Models\Book",
     *     description="Book Model",
     *     @OA\Xml(
     *         name="Book"
     *     )
     * )
     */
    class Book
    {
//    "title",
//    "overview",
//    "publisher",
//    "publication_date",
//    "edition_description",
//    "pages",
//    "lexile",
        /**
         * @OA\Property(
         *     title="ID",
         *     description="Database ID",
         *     format="int64",
         *     example=1
         * )
         *
         * @var integer
         */
        private $id;

        /**
         * @OA\Property(
         *      title="title",
         *      description="Name of the new book",
         *      example="Catcher In The Rye"
         * )
         *
         * @var string
         */
        public $title;

        /**
         * @OA\Property(
         *      title="Overview",
         *      description="Overview of a new book",
         *      example="This is new book's description"
         * )
         *
         * @var string
         */
        public $overview;

        /**
         * @OA\Property(
         *      title="ISBN",
         *      description="The International Standard Book Number (ISBN) is a numeric commercial book identifier",
         *      example="1-84356-028-3"
         * )
         *
         * @var string
         */
        public $isbn;

        /**
         * @OA\Property(
         *      title="publisher",
         *      description="Publisher of the book",
         *      example="Simon Wallenberg Press"
         * )
         *
         * @var string
         */
        public $publisher;

        /**
         * @OA\Property(
         *      title="publication_date",
         *      description="The date the book was published",
         *      example="2020-01-27 17:50:45",
         *      format="datetime",
         *      type="date",
         * )
         *
         * @var string
         */
        public $publication_date;

        /**
         * @OA\Property(
         *      title="edition_description",
         *      description="A description of the book edition",
         *      example="Hard cover",
         *      format="string",
         *      type="string",
         * )
         *
         * @var string
         */
        public $edition_description;

        /**
         * @OA\Property(
         *      title="pages",
         *      description="The amount of pages a book has",
         *      example="500",
         *      format="integer",
         *      type="integer",
         * )
         *
         * @var string
         */
        public $pages;

        /**
         * @OA\Property(
         *      title="lexile",
         *      description="The Lexile Framework for Reading is an educational tool that uses a measure called a Lexile to match readers with books",
         *      example="AD740L",
         *      format="string",
         *      type="string",
         * )
         *
         * @var string
         */
        public $lexile;

        /**
         * @OA\Property(
         *      title="sales_rank",
         *      description="refers to the estimated number of copies sold of each book",
         *      example="85000000",
         *      format="integer",
         *      type="integer",
         * )
         *
         * @var string
         */
        public $sales_rank;

        /**
         * @OA\Property(
         *     title="Created at",
         *     description="Created at",
         *     example="2020-01-27 17:50:45",
         *     format="datetime",
         *     type="string"
         * )
         *
         * @var \DateTime
         */
        private $created_at;

        /**
         * @OA\Property(
         *     title="Updated at",
         *     description="Updated at",
         *     example="2020-01-27 17:50:45",
         *     format="datetime",
         *     type="string"
         * )
         *
         * @var \DateTime
         */
        private $updated_at;

        /**
         * @OA\Property(
         *     title="Deleted at",
         *     description="Deleted at",
         *     example="2020-01-27 17:50:45",
         *     format="datetime",
         *     type="string"
         * )
         *
         * @var \DateTime
         */
        private $deleted_at;

        /**
         * @OA\Property(
         *      title="Author ID",
         *      description="Author's id of the new project",
         *      format="int64",
         *      example=1
         * )
         *
         * @var integer
         */
        public $author_id;


        /**
         * @OA\Property(
         *     title="Author",
         *     description="Project author's user model",
         *     format="string",
         * )
         *
         * @var \App\Virtual\Models\User
         */
        private $author;
    }
