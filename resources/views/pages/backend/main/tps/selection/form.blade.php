<div class="form-group row">
  <label class="col-lg-3 col-form-label"> NIK </label>
  <div class="col-lg-9">
    {!! Form::text('nik', (isset($data->nik) ? $data->nik : ''), ['class' => $errors->has('nik') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('nik') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<!-- <div class="form-group row">
  <label class="col-lg-3 col-form-label"> Area </label>
  <div class="col-lg-9">
    {!! Form::select('id_area', tps_location_areas(), (isset($data->id_area) ? $data->id_area : NULL), ['placeholder' => '- Select Area -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_area') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group">
  <label> District </label>
  <select name="district" id="district" class="form-control">
    <option value="0">-- Select District --</option>
  </select>
</div> -->

<div class="form-group">
  <label> Area </label>
  <select name="id_area" id="id_area" class="form-control">
    <option value="0"> - Select Area - </option>
    @foreach($categories as $category)
    <option value="{{ $category->id }}">{{ $category->name }}</option>
    @endforeach
  </select>
</div>
<div class="form-group">
  <label> District </label>
  <select name="id_district" id="id_district" class="form-control">
    <option value="0"> - Select District - </option>
  </select>
</div>
<div class="form-group">
  <label> Village </label>
  <select name="village" id="village" class="form-control">
    <option value="0"> - Select Village - </option>
  </select>
</div>
