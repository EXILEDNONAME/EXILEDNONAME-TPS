<div class="form-group row">
  <label class="col-lg-3 col-form-label"> NIK </label>
  <div class="col-lg-9">
    {!! Form::text('nik', (isset($data->nik) ? $data->nik : ''), ['class' => $errors->has('nik') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('nik') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Area </label>
  <div class="col-lg-9">
    {!! Form::select('id_area', tps_location_areas(), (isset($data->id_area) ? $data->id_area : NULL), ['id' => 'id_area', 'placeholder' => '- Select Area -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_area') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> District </label>
  <div class="col-lg-9">
    {!! Form::select('id_district', tps_location_districts(), (isset($data->id_district) ? $data->id_district : NULL), ['id' => 'id_district', 'placeholder' => '- Select District -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_district') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Village </label>
  <div class="col-lg-9">
    {!! Form::select('village', tps_location_villages(), (isset($data->village) ? $data->village : NULL), ['id' => 'village', 'placeholder' => '- Select Village -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('village') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> RT </label>
  <div class="col-lg-9">
    {!! Form::number('rt', (isset($data->rt) ? $data->rt : ''), ['class' => $errors->has('rt') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('rt') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> RW </label>
  <div class="col-lg-9">
    {!! Form::number('rw', (isset($data->rw) ? $data->rw : ''), ['class' => $errors->has('rw') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('rw') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
