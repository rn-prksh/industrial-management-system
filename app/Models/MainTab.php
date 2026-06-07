<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainTab extends Model
{
    use HasFactory;

    // Specify the table name
    protected $table = 'main_tab';

    // Specify the columns that are mass assignable
    protected $fillable = ['dia_no', 'u_name', 'material', 'contact', 'given', 'company'];
}
