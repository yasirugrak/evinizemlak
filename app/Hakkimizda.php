<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hakkimizda extends Model
{
    protected $table='hakkimizda';
    protected $primaryKey = 'id';
    protected $fillable=['baslik','kisa_yazi','icerik','misyon','vizyon'];
}
