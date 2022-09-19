<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Type </label>
  <div class="col-lg-9">
    {{ Form::select('type', ['0' => 'Banner 1', '1' => 'Banner 2'], (isset($data->type) ? $data->type : ''), ['placeholder' => '- Select Type -', 'class' => $errors->has('type') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) }}
    @error('type') <span class="invalid-feedback" role="alert"><strong> {{ $message }} </strong></span> @enderror
  </div>
</div>

<div class="form-group row">
  <label class="col-lg-3 col-form-label"> Photo </label>
  <div class="col-lg-9">
    {!! Form::file('photo', NULL, ['class' => $errors->has('photo') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
    @error('photo') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
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
    {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['id' => 'ex-textarea', 'class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control']) !!}
    @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
  </div>
</div>
