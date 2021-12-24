<?php

	namespace App\Virtual;

    /**
     * @OA\Schema(
     *      title="App\Virtual\StoreBookRequest",
     *      description="Store Book request body data",
     *      type="object",
     *      required={"name"}
     * )
     */

    class StoreBookRequest
    {
        /**
         * @OA\Property(
         *      title="name",
         *      description="Name of the new project",
         *      example="A nice project"
         * )
         *
         * @var string
         */
        public $name;

        /**
         * @OA\Property(
         *      title="description",
         *      description="Description of the new project",
         *      example="This is new project's description"
         * )
         *
         * @var string
         */
        public $description;

        /**
         * @OA\Property(
         *      title="author_id",
         *      description="Author's id of the new project",
         *      format="int64",
         *      example=1
         * )
         *
         * @var integer
         */
        public $author_id;
    }
