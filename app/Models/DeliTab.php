<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliTab extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'deli_tab';

    // Specify the columns that are mass assignable
    protected $fillable = ['diagram',  'r_name', 'r_contact', 'company', 'deli_date', 'deli_time'];
}
