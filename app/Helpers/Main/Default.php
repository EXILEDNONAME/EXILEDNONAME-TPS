<?php

use App\Models\Backend\Main\TPS\Location\Area;

function filter_tps_areas() {
  $items = Area::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}
