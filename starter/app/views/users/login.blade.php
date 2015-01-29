@extends('master')

@section('title')
@parent
:: Sign In
@stop

{{-- Content --}}
@section('content')
    @if ($errors->has())
        <div id="errors" class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>        
            @endforeach
        </div>
        @endif
<div class="page-header">
    <h2>Sign In to your account</h2>
</div>

    {{ Form::open(array('url' => 'signin', 'class' => 'form-horizontal')) }}
      <div class="form-group">
        <label for="inputEmail"  class="col-sm-2 control-label">Email</label>
        <div class="col-sm-10">
          <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" {{ (Input::old('email')) ? ' value="' . e(Input::old('email')) . '"' : '' }}>
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword" class="col-sm-2 control-label">Password</label>
        <div class="col-sm-10">
          <input type="password" name="password"  class="form-control" id="inputPassword" placeholder="Password">
        </div>
      </div>
      
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Sign in</button>
          {{ Form::token() }}
        </div>
      </div>
    </form>

{{ Form::close() }}
@stop