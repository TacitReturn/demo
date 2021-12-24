<?php

	namespace App\Virtual\Resources;

    /**
     * @OA\Schema(
     *     title="App\Virtual\Resources\BookResource",
     *     description="Book resource",
     *     @OA\Xml(
     *         name="BookResource"
     *     )
     * )
     */
    class BookResource
    {
        /**
         * @OA\Property(
         *     title="Data",
         *     description="Data wrapper"
         * )
         *
         * @var \App\Virtual\Models\Book[]
         */
        private $data;
    }
