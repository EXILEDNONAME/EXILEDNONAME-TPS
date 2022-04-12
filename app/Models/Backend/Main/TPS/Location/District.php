<?php

namespace App\Models\Backend\Main\TPS\Location;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use App\Models\Backend\Main\TPS\Location\Area;

class District extends Model {

  use LogsActivity, SoftDeletes;

  protected $table = 'tps_location_districts';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function getActivitylogOptions(): LogOptions {
    return LogOptions::defaults()->logOnly(['*']);
  }

  public function tps_location_areas(){
    return $this->belongsTo(Area::class, 'id_area');
  }

}
