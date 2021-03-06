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

// PARTICIPANTS
Route::group([
  'as' => 'system.main.tps.participant.',
  'prefix' => 'dashboard/tps/participants',
  'namespace' => 'App\Http\Controllers\Backend\Main\TPS',
], function(){
  Route::get('active/{id}', 'ParticipantController@active')->name('active');
  Route::get('inactive/{id}', 'ParticipantController@inactive')->name('inactive');
  Route::get('restore/{id}', 'ParticipantController@restore')->name('restore');
  Route::get('restoreall', 'ParticipantController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'ParticipantController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'ParticipantController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'ParticipantController@delete')->name('delete');
  Route::get('deleteall', 'ParticipantController@deleteall')->name('delete-all');
  Route::get('history', 'ParticipantController@history')->name('history');
  Route::get('trash', 'ParticipantController@trash')->name('trash');
  Route::resource('/', 'ParticipantController')->parameters(['' => 'id']);
});

// SELECTIONS
Route::group([
  'as' => 'system.main.tps.selection.',
  'prefix' => 'dashboard/tps/selections',
  'namespace' => 'App\Http\Controllers\Backend\Main\TPS',
], function(){
  Route::get('area/{id}','SelectionController@getarea')->name('get-area');
  Route::get('district/{id}','SelectionController@getdistrict')->name('get-district');
  Route::get('active/{id}', 'SelectionController@active')->name('active');
  Route::get('inactive/{id}', 'SelectionController@inactive')->name('inactive');
  Route::get('restore/{id}', 'SelectionController@restore')->name('restore');
  Route::get('restoreall', 'SelectionController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'SelectionController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'SelectionController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'SelectionController@delete')->name('delete');
  Route::get('deleteall', 'SelectionController@deleteall')->name('delete-all');
  Route::get('history', 'SelectionController@history')->name('history');
  Route::get('trash', 'SelectionController@trash')->name('trash');
  Route::resource('/', 'SelectionController')->parameters(['' => 'id']);
});
