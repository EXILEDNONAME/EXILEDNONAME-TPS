<?php

namespace App\Models\Backend\Main\TPS;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Activitylog\LogOptions;
use App\Models\Backend\Main\TPS\ParticipantPosition;

class Participant extends Model {

  use LogsActivity, SoftDeletes;

  protected $table = 'tps_participants';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function getActivitylogOptions(): LogOptions {
    return LogOptions::defaults()->logOnly(['*']);
  }

  public function tps_positions(){
    return $this->belongsTo(ParticipantPosition::class, 'id_position');
  }

}
