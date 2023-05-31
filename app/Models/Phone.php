<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Phone extends Model
{
    use HasFactory,SoftDeletes;
    
    protected $fillable= [
        'category_id',
        'title',
        'price',
        'image',
        'description'
    ];
    public function Category(){
     return $this->belongsTo(Category::class);   
    }
}
