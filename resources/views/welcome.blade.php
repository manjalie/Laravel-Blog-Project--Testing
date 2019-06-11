@extends('layout.main')

@section('title')

    Welcome Page

    @endsection

@section('body')

<div class="row">
<div class="col-md-6">

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

@if(session()->has('message'))
      <div class="alert alert-success">
      <ul>
      {{ session()->get('message') }}
      </ul>
      
      </div>

@endif

@if(session()->has('loginerror'))
      <div class="alert alert-danger">
      <ul>
      {{ session()->get('loginerror') }}
      </ul>
      
      </div>

@endif


<h2>Register</h2>
<form class="form-horozontal" method="post" action="{{ route('signup') }}">
@csrf
<div class="form-group" >
    <label for="inputEmail3" class="col-sm-2 col-form-label">FirstName</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputFirstName" placeholder="First Name" name="firstname">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">LastName</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputLastName" placeholder="Last Name" name="lastname">
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" placeholder="Email" name="email">
    </div>
  </div>
  <div class="form-group">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
    </div>
  </div>

  <div class="form-group">
    <div class="col-sm-10">
      <button type="submit" class="btn btn-primary">Sign up</button>
    </div>
    
  </div>
</form>
</div>




<div class="col-md-6">
<h2>Login</h2>
<form class="form-horozontal" method="post" action="{{ route('login') }}">
@csrf
<div class="form-group row">
  <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
  <div class="col-sm-10">
    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
  </div>
</div>
<div class="form-group row">
  <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
  <div class="col-sm-10">
    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="password">
  </div>
</div>
<div class="form-group row">
  <div class="col-sm-10">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</div>
</form>
</div>

</div>

    @endsection