<?php

// BACKEND
Route::group([
  'as' => 'system.main.tps.customer.',
  'prefix' => 'dashboard/tps/customers',
  'namespace' => 'App\Http\Controllers\Backend\Main\TPS',
], function(){
  Route::get('active/{id}', 'CustomerController@active')->name('active');
  Route::get('inactive/{id}', 'CustomerController@inactive')->name('inactive');
  Route::get('restore/{id}', 'CustomerController@restore')->name('restore');
  Route::get('restoreall', 'CustomerController@restoreall')->name('restore-all');
  Route::get('delete-permanent/{id}', 'CustomerController@delete_permanent')->name('delete-permanent');
  Route::get('delete-permanentall', 'CustomerController@delete_permanentall')->name('delete-permanentall');
  Route::get('delete/{id}', 'CustomerController@delete')->name('delete');
  Route::get('deleteall', 'CustomerController@deleteall')->name('delete-all');
  Route::get('history', 'CustomerController@history')->name('history');
  Route::get('trash', 'CustomerController@trash')->name('trash');
  Route::resource('/', 'CustomerController')->parameters(['' => 'id']);
});
