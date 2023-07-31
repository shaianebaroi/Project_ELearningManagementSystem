<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $primaryKey = 'news_id';
    protected $fillable = ['news_date', 'news_title', 'news_details', 'status'];
}
