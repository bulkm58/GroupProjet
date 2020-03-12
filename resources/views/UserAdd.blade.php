@extends('layout/master')
@section('content')
    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<header>
  <h1 class="editation text-danger text-center">CREATE</h1>
</header>
<div class="container">
    
      <div class="form-register">
        
        
      <form name="register" action="{{route('saveuser')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input name="utf8" type="hidden" value="✓">
          <div class="row pt-5">
            <div class="col-xs-6">
              <div class="form-group">
                <label for="user_first_name">First name</label>
                <input autofocus="autofocus" class="form-control" required="required" type="text" name="name" id="user_first_name">
              </div> <!-- close .form-group -->
            </div> <!-- close .col -->
            <div class="col-xs-6">
              <div class="form-group">

              </div> <!-- close .form-group -->
            </div> <!-- close .col -->
          </div> <!-- close .row -->
          <div class="form-group">
            <label for="user_email">
              Email address
            </label>
            <input class="form-control" type="email" value="" name="email" id="user_email" data-cip-id="cIPJQ342845639">
          </div> <!-- close .form-group -->
          <div class="form-group">
            <label for="user_username">
              age<span class="text-secondary"></span>
            </label>
            <input class="form-control" required="required" type="text" name="age" id="user_username" data-cip-id="user_username" autocomplete="off">
          </div> <!-- close .form-group -->
          <div class="form-group">
            <label for="avatar">
              avatar<span class="text-secondary"></span>
            </label>
            <select name="id_avatar" id="">
              @foreach ($avatars as $avatar)
                  
                 <option value="{{$avatar->id}}">{{$avatar->nom}}</option>
              @endforeach
            </select>
          </div> <!-- close .form-group -->
          <div class="form-group">
            
          </div> <!-- close .form-group -->
          <div class="form-group">
            <input type="submit" value="enregistrer" class="btn btn-primary">
          </div> <!-- close .form-group -->
          <a href="{{route('user')}}" class="btn btn-success">home</a>
          @if ($errors->any())
          <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif  
      </form>
    </div>

      @endsection