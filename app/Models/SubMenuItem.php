<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubMenuItem extends Model
{
  protected $fillable =[
    'name',
    'menu_item_id',
   
    'link',
  ];
}
