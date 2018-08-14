<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ayarlar extends Model
{
    protected $table='ayar';
    protected $primaryKey = 'id';
    protected $fillable=['logo','url','title','description','keywords','author','tel','gsm','faks','mail','adres','ilce','il','recapctha','maps','analystic','facebook','twitter','youtube','instagram','google','smtp_user','smtp_password','smtp_host','smtp_port'];
}
