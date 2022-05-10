<?php

use App\Models\Backend\Main\TPS\Location\Area;
use App\Models\Backend\Main\TPS\Location\District;
use App\Models\Backend\Main\TPS\Location\Village;
use App\Models\Backend\Main\TPS\ParticipantPosition;
use App\Models\Backend\Main\TPS\ParticipantEducation;
use App\Models\Backend\Main\TPS\ParticipantJob;
use App\Models\Backend\Main\TPS\ParticipantReligion;
use App\Models\Backend\Main\TPS\Participant;

function filter_tps_location_areas() {
  $items = Area::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_tps_location_districts() {
  $items = District::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_tps_location_villages() {
  $items = Village::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function participant_positions() {
  $items = ParticipantPosition::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function participant_educations() {
  $items = ParticipantEducation::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function participant_jobs() {
  $items = ParticipantJob::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function participant_religions() {
  $items = ParticipantReligion::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

// function tps_participants() {
//   $items = Participant::orderBy('sort','asc')->where('active', 1)->pluck('nik', 'id')->toArray();
//   return $items;
// }

function tps_participants() {
  $items = DB::table('tps_participants as a')
    ->selectRaw('CONCAT(a.nik, " - ", a.name) as concatname, a.id')->where('a.active', 1)
    ->pluck('concatname', 'a.id');
  return $items;
}

function tps_location_areas() {
  $items = Area::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function tps_location_districts() {
  $items = District::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function tps_location_villages() {
  $items = Village::orderBy('sort','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}
