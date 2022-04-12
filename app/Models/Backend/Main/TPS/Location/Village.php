<?php

namespace App\Models\Backend\Main\TPS\Location;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use App\Models\Backend\Main\TPS\Location\District;

class Village extends Model {

  use LogsActivity, SoftDeletes;

  protected $table = 'tps_location_villages';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function getActivitylogOptions(): LogOptions {
    return LogOptions::defaults()->logOnly(['*']);
  }

  public function tps_location_districts(){
    return $this->belongsTo(District::class, 'id_district');
  }

}
