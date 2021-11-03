<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable =['name','price','description','category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function image(){
        return $this->hasOne(Image::class);
    }

    public function comments(){

        return $this->hasMany(Comment::class);
    }

    public function scopeSearchTitleProduct($query ,$name){


        return $query->where('name','LIKE',$name.'%')->get();
    }
}
