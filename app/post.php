<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //Table Name
    protected $table = 'posts';
    //Primary key
    public $PrimaryKey = 'id';

    public $timestamps = 'true';

    public function use(){
        return $this->belongsTo('App\User');
    }

}

