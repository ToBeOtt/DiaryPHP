<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiaryMessage extends Model
{
    // This is what is allowed to be modified by enduser
    protected $fillable = ['title', 'text'];

    use HasFactory;
}
