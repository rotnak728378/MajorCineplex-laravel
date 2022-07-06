<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MovieInfo extends Model
{
    use HasFactory;
    protected $table = "table_movie";
    protected $primaryKey = "movie_id";
    protected $fillable = ["poster", "movie_title", "release_date", "due_date", "duration", "genre", "trailer", "description", 
            "showing", "cinema_id1", "cinema_id2", "cinema_id3", "cinema_id4", "cinema_id5", "show_time"
        ];
}
