<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $primaryKey = 'projectname';    #if ID is not strictly integer
    protected $keyType = 'string';   #data type used for ID
    public $timestamps = false;
}
