<?php

    namespace App\Models;

    use Illuminate\Database\Eloquent\Factories\HasFactory;
    use Illuminate\Database\Eloquent\Model;
    use Illuminate\Database\Eloquent\Relations\BelongsTo;

    class Book extends Model
    {
        use HasFactory;

        public $fillable = [
            "title",
            "overview",
            "publisher",
            "publication_date",
            "edition_description",
            "pages",
            "lexile",
        ];

        public function author (): BelongsTo
        {
            return $this->belongsTo(Author::class, "author_id", "id");
        }
    }
