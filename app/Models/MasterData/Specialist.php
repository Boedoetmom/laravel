<?php

namespace App\Models\MasterData;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Specialist extends Model
{
    //use HasFactory;
   use SoftDeletes;

   public $table = 'specialist';
   
   protected $date = [
   
       'create_at',
       'update_at',
       'delete_at',
   ];
   
   protected $fillable = [
       'name',
       'price',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

   function appointment() {

    return $this->hasMany('App\Models\Operational\Appointment', 'specialist_id');
}
}
