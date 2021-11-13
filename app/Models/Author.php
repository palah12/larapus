<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    //yang di lihat
    protected $visible = ['name'];
    //yang bisa di isi
    protected $fillable = ['name'];
     //catat waktu/update otomatis
    public $timestamps = true;

    public function books(){
       return $this->hasMany('App,Models,Books','author_id');
    }
}
