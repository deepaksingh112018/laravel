<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Raj;
class Raj extends Model
{
  protected $fillable =['name','age','email','password','mobile'];
}
