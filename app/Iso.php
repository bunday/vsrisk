<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Iso extends Model
{
   public $fillable = ['ref','control_point','applies','statement','responsibility','reference'];
}