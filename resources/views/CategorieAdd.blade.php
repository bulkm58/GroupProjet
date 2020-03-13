@extends('layout/master')
@section('content')
    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">

<header>
  <h1 class="editation text-danger text-center">CREATE</h1>
</header>
<div class="container">
    
      <div class="form-register">
        
        
      <form name="register" action="{{route('saveCategorie')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input name="utf8" type="hidden" value="✓">
          <div class="row pt-5">
            <div class="col-xs-6">
            </div> <!-- close .col -->
            <div class="col-xs-6">
              <div class="form-group">

              </div> <!-- close .form-group -->
            </div> <!-- close .col -->
          </div> <!-- close .row -->
         
          <div class="form-group">
            <label for="user_password">
              image<span class="text-secondary"></span>
            </label>
            <input autocomplete="off" class="form-control" required="required" type="file" name="img" id="user_password" data-cip-id="cIPJQ342845640">
          </div> <!-- close .form-group -->
          <div class="form-group">
            
          </div> <!-- close .form-group -->
          <div class="form-group">
            <input type="submit" value="enregistrer" class="btn btn-primary">
          </div> <!-- close .form-group -->
          <a href="{{route('Categorie')}}" class="btn btn-success">home</a>
      </form>
      </div>
      @endsection