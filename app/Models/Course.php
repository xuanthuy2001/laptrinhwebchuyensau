<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    // public $table = 'lop';
    protected $fillable = [
        'name',
    ];
    public function getYearCreateAtAttribute()
    {
        return date_format(date_create($this->create_at), 'Y');
    }
}