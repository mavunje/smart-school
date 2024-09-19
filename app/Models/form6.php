<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class form6 extends Model
{
    use HasFactory;
protected $table = ('form6s');

protected $fillable =([

    'name',
        'date',
        'gender',
        'region',
        'dioces',
        'nation',
        'photo',
        'address',
        'phone',
        'email',
        'parname',
        'parphone',
        'paremail',
        'emergencephone',
        'health',
        'disability',

]);


}
