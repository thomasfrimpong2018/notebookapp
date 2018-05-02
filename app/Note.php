<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    //Table name
    protected $table="notes";
    //Primary key
    public $primaryKey="id";
    //timestamp
    public $timestamp=true;

   public function notebook(){
       return $this->belongsTo('App\Notebook');
   }
    
}
