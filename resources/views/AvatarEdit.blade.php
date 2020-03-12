<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
@extends('layout/master')

  <style>
     @import url(https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Oxygen);
/* Page layout */
body {
    
    background-color: #fff;
    margin: 0;
    padding: 0;
    font-family: 'Oxygen', sans-serif;
    color: #444;
    font-size: 15px;
    line-height: 18px;
    font-weight: 300;
}
header {
    margin: 0;
    background: #000;
    padding: 1px;
}
article {
    margin: 40px 30px;
}
h1 {
    font-family: 'Open Sans Condensed', sans-serif;
    letter-spacing: 1px;
    font-size: 2.3em;
    line-height: 44px;
    text-transform: uppercase;
    color: #fff;
    font-weight: 900;
    margin: 0;
    padding: 10px 0 0 30px;
    letter-spacing: 2px;
}
h2 { margin: 20px 0 10px 0;
    font-weight: 900;
}
p {
    margin: 20px 0 5px 0;
}
/* Table Layout */
table.vitamins {
    margin: 20px 0 0 0;
    border-collapse: collapse;
    border-spacing: 0;
    background: #212121;
    color: #fff;
}
table.vitamins th, table.vitamins td {
    text-align: center;
}
table.vitamins thead {
    line-height: 12px;
    background: #2E63E7;
    text-transform: uppercase;
}
table.vitamins thead th {
    color: #fff;
    padding: 10px;
    letter-spacing: 1px;
    vertical-align: bottom;
}
table.vitamins thead th:nth-child(1) {
    width: 20%;
    text-align: left;
    padding-left: 20px;
}
table.vitamins thead th:nth-child(2) {
    width: 30%;
}
table.vitamins thead th:nth-child(3) {
    width: 35%;
}
table.vitamins thead th:nth-child(4) {
    width: 15%;
}
table.vitamins tbody {
    font-size: 1em;
    line-height: 15px;
}
table.vitamins tbody tr {
    border-top: 2px solid rgba(109, 176, 231, 0.8);
    transition: background 0.6s, color 0.6s;
}
table.vitamins tbody tr:nth-child(even) {
    background: rgba(255, 255, 255, 0.2);
}
table.vitamins tbody tr:hover {
    color: #000;
    background: rgba(255, 255, 255, 0.7);
    font-weight: 900;
}
table.vitamins tbody td {
    padding: 12px;
}
table.vitamins tbody tr:hover td:first-child {
    background: rgba(0,0,0,0);
}
table.vitamins tbody td:first-child {
    text-align: left;
    padding-left: 20px;
    font-weight: 700;
    background: rgba(109, 176, 231, 0.35);
    transition: backgrounf 0.6s;
}
table.vitamins tfoot {
    font-size: 0.8em;
}
table.vitamins tfoot tr {
    border-top: 2px solid #2E63E7;
}
table.vitamins tfoot td {
    color: rgba(255,255,215,0.6);
    text-align: left;
    line-height: 15px;
    padding: 15px 20px;
}
/* Mobile Layout */
@media screen and (max-width: 400px) {
    h1 {
        font-size: 34px;
        line-height: 36px;
        padding-left: 15px;
    }
    article {
        margin: 10px 15px;
    }
    table.vitamins {
        font-size: 0.8em;
    }
}




  </style>
  <header>
          <h1 class="editation text-danger text-center">EDIT</h1>
      </header>
<div class="container">
    
      
      <div class="form-register">
        
      <form name="register" action="{{route('updateavatar',$lesavatar->id)}}" method="POST" enctype="multipart/form-data" >
          @csrf
          <input name="utf8" type="hidden" value="✓">
          <div class="row pt-5">
            <div class="col-xs-6">
              <div class="form-group">
                <label for="nom">First name</label>
                <input autofocus="autofocus" class="form-control" required="required" type="text" name="nom" id="user_first_name">
              </div> <!-- close .form-group -->
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
            <input class="form-control" required="required" type="file" name="img">
          </div> <!-- close .form-group -->
          <div class="form-group">
            
          </div> <!-- close .form-group -->
          <div class="form-group">
            <input type="submit" value="enregistrer" class="btn btn-primary">
          </div> <!-- close .form-group -->
          <a href="{{route('avatar')}}" class="btn btn-success">home</a>
      </form>
      </div>
</div>
    