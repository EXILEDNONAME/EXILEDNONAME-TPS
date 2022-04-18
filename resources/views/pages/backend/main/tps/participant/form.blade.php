<div class="form-group row">
  <label class="col-lg-3 col-form-label"> NIK </label>
  <div class="col-lg-9">
    {!! Form::text('nik', (isset($data->nik) ? $data->nik : ''), ['class' => $errors->has('nik') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('nik') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Position </label>
  <div class="col-lg-9">
    {!! Form::select('id_position', participant_positions(), (isset($data->id_position) ? $data->id_position : NULL), ['placeholder' => '- Select Position -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_position') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Email </label>
  <div class="col-lg-9">
    {!! Form::text('email', (isset($data->email) ? $data->email : ''), ['class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Phone </label>
  <div class="col-lg-9">
    {!! Form::text('phone', (isset($data->phone) ? $data->phone : ''), ['class' => $errors->has('phone') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('phone') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Photo Live </label>
  <div class="col-lg-9">
    <input type="file" name="photo_live" accept="image/*" capture>
    @error('photo_live') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Photo KTP </label>
  <div class="col-lg-9">
    <input type="file" name="photo_ktp" accept="image/*" capture>
    @error('photo_ktp') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Photo KK </label>
  <div class="col-lg-9">
    <input type="file" name="photo_kk" accept="image/*" capture>
    @error('photo_kk') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Job </label>
  <div class="col-lg-9">
    {!! Form::text('job', (isset($data->job) ? $data->job : ''), ['class' => $errors->has('job') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('job') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Education </label>
  <div class="col-lg-9">
    {!! Form::select('id_education', participant_educations(), (isset($data->id_education) ? $data->id_education : NULL), ['placeholder' => '- Select Education -', 'class' => 'form-control', 'required' => 'required']) !!}
    @error('id_education') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Organization </label>
  <div class="col-lg-9">
    {!! Form::text('organization', (isset($data->organization) ? $data->organization : ''), ['class' => $errors->has('organization') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('organization') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
  <label class="col-lg-3 col-form-label"> Address </label>
  <div class="col-lg-9">
    {!! Form::textarea('address', (isset($data->address) ? $data->address : ''), ['class' => $errors->has('address') ? 'summernote form-control is-invalid' : 'summernote form-control', 'contentEditable' => 'true']) !!}
    @error('address') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
