<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rolemodel extends Model
{
    use HasFactory;

    protected $table ='role';

    static public function getRecord()
    {
        return Rolemodel::get();
    }

    static public function getSingle($id)
    {
        return Rolemodel::find($id);
    }

}
