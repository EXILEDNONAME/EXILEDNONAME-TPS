<?php

use App\Models\Backend\Main\TPS\Location\Area;
use App\Models\Backend\Main\TPS\Location\District;

function filter_tps_areas() {
  $items = Area::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_tps_districts() {
  $items = District::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}
