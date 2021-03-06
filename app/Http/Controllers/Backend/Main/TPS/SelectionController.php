<?php

namespace App\Http\Controllers\Backend\Main\TPS;

use Auth;
use DataTables;
use Redirect,Response;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Activitylog\Models\Activity;
use App\Models\Category;
use App\Models\SubCategory;

use App\Models\Backend\Main\TPS\Location\Area;
use App\Models\Backend\Main\TPS\Location\District;
use App\Models\Backend\Main\TPS\Location\Village;

use App\Http\Requests\Backend\Main\TPS\Selection\StoreRequest;
use App\Http\Requests\Backend\Main\TPS\Selection\UpdateRequest;

class SelectionController extends Controller {

  /**
  **************************************************
  * @return Authentication
  * @return Auto-Configurations
  **************************************************
  **/

  public function __construct() {

    $this->middleware('auth');
    $this->url = '/dashboard/tps/selections';
    $this->path = 'pages.backend.main.tps.selection.';
    $this->model = 'App\Models\Backend\Main\TPS\Selection';

    if (request('date_start') && request('date_end')) { $this->data = $this->model::orderby('date_start', 'desc')->whereBetween('date_start', [request('date_start'), request('date_end')])->get(); }
    else { $this->data = $this->model::get(); }

  }

  public function getarea($id_area) {
    $data = District::where('id_area',$id_area)->get();
    return response()->json(['data' => $data]);
  }

  public function getdistrict($id_district) {
    $data = Village::where('id_district',$id_district)->get();
    return response()->json(['data' => $data]);
  }

  /**
  **************************************************
  * @return Index
  **************************************************
  **/

  public function index() {
    $model = $this->model;
    if(request()->ajax()) {
      return DataTables::of($this->data)
      ->editColumn('date_start', function($order) { return \Carbon\Carbon::parse($order->date_start)->format('d F Y, H:i'); })
      ->editColumn('date_end', function($order) { return \Carbon\Carbon::parse($order->date_end)->format('d F Y, H:i'); })
      ->editColumn('id_participants_nik', function($order) { return $order->tps_participants->nik; })
      ->editColumn('id_participants_name', function($order) { return $order->tps_participants->name; })
      ->editColumn('id_positions', function($order) { return $order->tps_participants->tps_positions->name; })
      ->editColumn('id_areas', function($order) {
        return $order->tps_location_areas->name;
      })
      ->editColumn('id_districts', function($order) {
        return $order->tps_location_districts->name;
      })
      ->editColumn('id_villages', function($order) {
        if ($order->tps_participants->tps_positions->id == 1) { return '-'; }

        if (!empty($order->tps_location_villages->name)) { return $order->tps_location_villages->name; }
        else { return '';}
      })
      ->editColumn('rws', function($order) {
        if ($order->tps_participants->tps_positions->id == 1) { return '-'; }
        if ($order->tps_participants->tps_positions->id == 2) { return '-'; }
        else { return $order->rw; }
      })
      ->editColumn('rts', function($order) {
        if ($order->tps_participants->tps_positions->id == 1) { return '-'; }
        if ($order->tps_participants->tps_positions->id == 2) { return '-'; }
        if ($order->tps_participants->tps_positions->id == 3) { return '-'; }
        else { return $order->rt; }
      })
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . 'index', compact('model'));
  }

  /**
  **************************************************
  * @return Show
  **************************************************
  **/

  public function show($id) {
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . 'show', compact('data', 'model'));
  }

  /**
  **************************************************
  * @return Create
  **************************************************
  **/

  public function create() {
    $path = $this->path;
    $model = $this->model;
    $categories = Area::get();
    return view($this->path . 'create', compact('categories', 'path', 'model'));
  }

  /**
  **************************************************
  * @return Store
  **************************************************
  **/

  public function store(StoreRequest $request) {
    $store = $request->all();
    $this->model::create($store);
    $userSchema = User::first();
    return redirect($this->url)->with('success', trans('default.notification.success.item-created'));

  }

  /**
  **************************************************
  * @return Edit
  **************************************************
  **/

  public function edit($id) {
    $path = $this->path;
    $model = $this->model;
    $data = $this->model::findOrFail($id);
    return view($this->path . 'edit', compact('path', 'data', 'model'));
  }

  /**
  **************************************************
  * @return Update
  **************************************************
  **/

  public function update(UpdateRequest $request, $id) {
    $data = $this->model::findOrFail($id);
    $update = $request->all();
    $data->update($update);
    return redirect($this->url)->with('success', trans('default.notification.success.item-updated'));
  }

  /**
  **************************************************
  * @return Destroy
  **************************************************
  **/

  public function destroy($id) {
    try {
      $this->model::destroy($id);
      return redirect($this->url)->with('success', trans('default.notification.success.item-deleted'));
    } catch (\Exception $e) {
      return redirect($this->url)->with('error', trans('default.notification.error'));
    }
  }

  /**
  **************************************************
  * @return Enable
  * @return Disable
  **************************************************
  **/

  public function active($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 1 ]);
    return Response::json($data);
  }

  public function inactive($id) {
    $data = $this->model::where('id', $id)->update([ 'active' => 0 ]);
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete
  **************************************************
  **/

  public function delete($id) {
    $this->model::destroy($id);
    $data = $this->model::where('id',$id)->delete();
    return Response::json($data);
  }

  /**
  **************************************************
  * @return Delete-All
  **************************************************
  **/

  public function deleteall(Request $request) {
    $exilednoname = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$exilednoname))->delete();
    return Response::json($exilednoname);
  }

  /**
  **************************************************
  * @return TRASH
  * @return RESTORE
  * @return RESTORE-ALL
  * @return DELETE-PERMANENT
  * @return DELETE-PERMANENT-ALL
  **************************************************
  **/

  public function trash() {
    $data = $this->model::onlyTrashed()->get();
    if(request()->ajax()) {
      return DataTables::of($data)
      ->editColumn('deleted_at', function($order) { return \Carbon\Carbon::parse($order->deleted_at)->format('d F Y, H:i'); })
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . 'trash', compact('data'));
  }

  public function restore($id) {
    $data = $this->model::withTrashed()->findOrFail($id);
    if ($data->trashed()) {
      $data->restore();
      $data = $this->model::where('id', $id)->update(['deleted_at' => NULL]);
      return Response::json($data);
    } else { return Response::json($data);}
  }

  public function restoreall(Request $request) {
    $exilednoname = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$exilednoname))->restore();
    return Response::json($exilednoname);
  }

  public function delete_permanent($id) {
    $data = $this->model::withTrashed()->findOrFail($id);
    if(!$data->trashed()) { return Response::json($data); }
    else {
      $data->forceDelete();
      return Response::json($data);
    }
  }

  public function delete_permanentall(Request $request) {
    $exilednoname = $request->EXILEDNONAME;
    $this->model::whereIn('id',explode(",",$exilednoname))->forceDelete();
    return Response::json($exilednoname);
  }

  /**
  **************************************************
  * @return HISTORY
  **************************************************
  **/

  public function history() {
    $data = Activity::where('subject_type', $this->model)->orderby('updated_at', 'desc')->get();
    if(request()->ajax()) {
      return DataTables::of($data)
      ->editColumn('subjects', function($order) { if(!empty($order->properties['attributes']['name'])) { return $order->properties['attributes']['name']; } else { return ''; }})
      ->editColumn('causer_id', function($order) { return $order->causer->name; })
      ->editColumn('updated_at', function($order) { return \Carbon\Carbon::parse($order->updated_at)->format('d F Y, H:i'); })
      ->rawColumns(['description'])
      ->addIndexColumn()
      ->make(true);
    }
    return view($this->path . 'history', compact('data'));
  }

}
