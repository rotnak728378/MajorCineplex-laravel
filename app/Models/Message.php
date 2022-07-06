<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $table='table_message';
    protected $primaryKey = 'message_id';
    protected $fillable = ["first_name", "last_name", "email", "phone", "message"];
}
