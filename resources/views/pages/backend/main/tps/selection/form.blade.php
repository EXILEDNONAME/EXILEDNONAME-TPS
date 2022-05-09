<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Participant </label>
  <div class="col-lg-9">
    {!! Form::select('id_participant', tps_participants(), (isset($data->id_participant) ? $data->id_participant : NULL), ['id' => 'id_participant', 'placeholder' => '- Select Participant -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_participant') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
    {!! Form::select('id_village', tps_location_villages(), (isset($data->id_village) ? $data->id_village : NULL), ['id' => 'id_village', 'placeholder' => '- Select Village -', 'class' => 'form-control']) !!}
    @error('id_village') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> RT </label>
  <div class="col-lg-9">
    {!! Form::number('rt', (isset($data->rt) ? $data->rt : ''), ['class' => $errors->has('rt') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('rt') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> RW </label>
  <div class="col-lg-9">
    {!! Form::number('rw', (isset($data->rw) ? $data->rw : ''), ['class' => $errors->has('rw') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('rw') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
