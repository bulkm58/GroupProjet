
    

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
@extends('layout/master')
<header>
          <h1 class="editation text-danger text-center">EDIT</h1>
      </header>
<div class="container">
    
      
      <div class="form-register">
        
      <form name="register" action="{{route('updateuser',$administration->id)}}" method="POST" enctype="multipart/form-data" >
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
            <input class="form-control" type="email" value="" name="email" id="user_email" >
          </div> <!-- close .form-group -->
          <div class="form-group">
            <label for="user_username">
              age<span class="text-secondary"></span>
            </label>
            <input class="form-control" required="required" type="text" name="age" id="user_username" >
          </div> <!-- close .form-group -->
          <div class="form-group">
            <label for="user_password">
              image<span class="text-secondary"></span>
            </label>
            <input class="form-control" required="required" type="file" name="img">
          </div> <!-- close .form-group -->
          <div class="form-group">
            
          </div> <!-- close .form-group -->
          <div class="form-group">
            <input type="submit" value="enregistrer" class="btn btn-primary">
          </div> <!-- close .form-group -->
          <a href="{{route('user')}}" class="btn btn-success">home</a>
      </form>
      </div>
</div>
    