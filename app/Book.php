<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table = 'books';
    protected $fillable = ['name','title','description','active','description_id'];


    public function category(){
        return $this->belongsTo('App\Category','description_id','id');
    }

}
