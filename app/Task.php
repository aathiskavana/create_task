<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
<<<<<<< HEAD

class Task extends Model
{
    protected $fillable = [
=======
use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{

    //protected $table ="tasks";
    use SoftDeletes;

    protected $fillable=[
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
        'name',
        'body',
        'user_id'
    ];
<<<<<<< HEAD
=======

    public function users(){
        return $this->belongTo('App\User');
    }
>>>>>>> 3c8d9946949b730dc23f912c7ffd2698f6ad189e
}
