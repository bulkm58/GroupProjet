<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">
@extends('layout/master')
<header>
    <h1>Categorie</h1>
</header>
<article>
    <h2>Formulaire</h2>
<a href="{{route('AddCategorie')}}" class="btn btn-primary">create</a>
<a href="{{route('Categorie')}}" class="btn btn-success">home</a>
    <table class="vitamins">
        <thead>
            <tr>
                
                <th>image</th>
                <th>
                    Edit&Delete
                </th>
                
            </tr>
        </thead>
        
        <tbody>
            @foreach ($theCategorie as $item)
                
            
            <tr>

           
            <td><img src="{{asset('storage/'.$item->img)}}" class="w-50" alt=""></td>
            <td>
            <a href="{{route('editCategorie',$item->id)}}" class="text-success">Edit</a>
                <a href="{{route('destroyCategorie',$item->id)}}" class="text-danger">Delete</a>
            </td>
            </tr>
            @endforeach
           
        </tbody>
    </table>
</article>