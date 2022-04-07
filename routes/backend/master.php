<?php

// LOCATION - AREAS
Route::group([
  'as' => 'system.main.tps.location.area.',
  'prefix' => 'dashboard/tps/location/areas',
  'namespace' => 'App\Http\Controllers\Backend\Main\TPS\Location',
], function(){
  Route::get('active/{id}', 'AreaController@active')->name('active');
  Route::get('inactive/{id}', 'AreaController@inactive')->name('inactive');
  Route::get('restore/{id}', 'AreaController@restore')->name('restore');
  Route::get('restoreall', 'AreaController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'AreaController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'AreaController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'AreaController@delete')->name('delete');
  Route::get('deleteall', 'AreaController@deleteall')->name('delete-all');
  Route::get('history', 'AreaController@history')->name('history');
  Route::get('trash', 'AreaController@trash')->name('trash');
  Route::resource('/', 'AreaController')->parameters(['' => 'id']);
});

// LOCATION - DISTRICTS
Route::group([
  'as' => 'system.main.tps.location.district.',
  'prefix' => 'dashboard/tps/location/districts',
  'namespace' => 'App\Http\Controllers\Backend\Main\TPS\Location',
], function(){
  Route::get('active/{id}', 'DistrictController@active')->name('active');
  Route::get('inactive/{id}', 'DistrictController@inactive')->name('inactive');
  Route::get('restore/{id}', 'DistrictController@restore')->name('restore');
  Route::get('restoreall', 'DistrictController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'DistrictController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'DistrictController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'DistrictController@delete')->name('delete');
  Route::get('deleteall', 'DistrictController@deleteall')->name('delete-all');
  Route::get('history', 'DistrictController@history')->name('history');
  Route::get('trash', 'DistrictController@trash')->name('trash');
  Route::resource('/', 'DistrictController')->parameters(['' => 'id']);
});

// LOCATION - VILLAGES
Route::group([
  'as' => 'system.main.tps.location.village.',
  'prefix' => 'dashboard/tps/location/villages',
  'namespace' => 'App\Http\Controllers\Backend\Main\TPS\Location',
], function(){
  Route::get('active/{id}', 'VillageController@active')->name('active');
  Route::get('inactive/{id}', 'VillageController@inactive')->name('inactive');
  Route::get('restore/{id}', 'VillageController@restore')->name('restore');
  Route::get('restoreall', 'VillageController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'VillageController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'VillageController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'VillageController@delete')->name('delete');
  Route::get('deleteall', 'VillageController@deleteall')->name('delete-all');
  Route::get('history', 'VillageController@history')->name('history');
  Route::get('trash', 'VillageController@trash')->name('trash');
  Route::resource('/', 'VillageController')->parameters(['' => 'id']);
});
