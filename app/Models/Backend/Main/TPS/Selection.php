<?php

namespace App\Models\Backend\Main\TPS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use App\Models\Backend\Main\TPS\Participant;
use App\Models\Backend\Main\TPS\Location\Area;
use App\Models\Backend\Main\TPS\Location\District;
use App\Models\Backend\Main\TPS\Location\Village;

class Selection extends Model {

  use LogsActivity, SoftDeletes;

  protected $table = 'tps_selections';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function getActivitylogOptions(): LogOptions {
    return LogOptions::defaults()->logOnly(['*']);
  }

  public function tps_participants(){
    return $this->belongsTo(Participant::class, 'id_participant');
  }

  public function tps_location_areas(){
    return $this->belongsTo(Area::class, 'id_area');
  }

  public function tps_location_districts(){
    return $this->belongsTo(District::class, 'id_district');
  }

  public function tps_location_villages(){
    return $this->belongsTo(Village::class, 'id_village');
  }

}
