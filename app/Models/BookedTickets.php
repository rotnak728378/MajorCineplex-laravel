<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookedTickets extends Model
{
    use HasFactory;
    protected $table = "table_booked";
    protected $primaryKey = "customer_id";
}
