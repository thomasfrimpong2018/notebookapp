<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notebook extends Model
{
    //Table name
    protected $table="notebook";
    //Primary key
    public $primaryKey="id";
    //timestamp
    public $timestamp=true;

    //protected $fillable=['name'];

    public function notes(){
        return $this->hasMany('App\Note');
    }
}
