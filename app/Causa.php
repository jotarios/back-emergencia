<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Causa extends Model
{
    protected $table = 'causas';
    protected $fillable =array('name','description','gather_point_lat','gather_point_lng','gather_point_street','city','street','work_zone_lat','work_zone_lng','work_zone_radious','expected_volunteers','picture','start_time','end_time');
    protected $id = 'id';
    
}
