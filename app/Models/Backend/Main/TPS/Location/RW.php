<?php

namespace App\Models\Backend\Main\TPS\Location;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;

class RW extends Model {

  use LogsActivity, SoftDeletes;

  protected $table = 'tps_location_rws';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function getActivitylogOptions(): LogOptions {
    return LogOptions::defaults()->logOnly(['*']);
  }

}
