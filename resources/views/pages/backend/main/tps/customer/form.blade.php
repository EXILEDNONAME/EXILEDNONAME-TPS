<div class="form-group row">
  <label class="col-lg-3 col-form-label"> NIK </label>
  <div class="col-lg-9">
    {!! Form::text('nik', (isset($data->nik) ? $data->nik : ''), ['class' => $errors->has('nik') ? 'form-control is-invalid' : 'form-control', 'maxlength' => '17', 'required' => 'required']) !!}
    @error('nik') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Position </label>
  <div class="col-lg-9">
    {!! Form::text('position', (isset($data->position) ? $data->position : ''), ['class' => $errors->has('position') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('position') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Name </label>
  <div class="col-lg-9">
    {!! Form::text('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Description </label>
  <div class="col-lg-9">
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'summernote form-control is-invalid' : 'summernote form-control', 'contentEditable' => 'true']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
