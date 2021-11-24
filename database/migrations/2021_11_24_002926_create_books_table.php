<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;

    class CreateBooksTable extends Migration
    {
        public function up ()
        {
            Schema::create('books', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger("author_id");
                $table->string("title");
                $table->text("overview");
                $table->string("isbn");
                $table->string("publisher");
                $table->date("publication_date");
                $table->string("edition_description")->nullable();
                $table->integer("pages");
                $table->string("lexile")->nullable();
                $table->integer("sales_rank")->nullable();
                $table->timestamps();
            });

            Schema::table("books", function (Blueprint $table) {
                $table->foreign("author_id")
                    ->references("id")
                    ->on("authors")
                    ->onDelete("CASCADE");
            });
        }

        public function down ()
        {
            Schema::table("books", function (Blueprint $table) {
                $table->dropForeign(["author_id"]);
            });

            Schema::dropIfExists('books');
        }
    }
