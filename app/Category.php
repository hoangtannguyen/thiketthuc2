<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'category';

    protected $fillable = ['name','title','description','active','description_id'];


    public function book(){
        return $this->hasMany('App\Book','description_id','id');
    }

}
