@extends('layouts.app')
@section('content')

<div class="text-center mt-4">
<h1>Portfolio</h1>
<ul>
    @foreach ($projects as $project)
        <li>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="..." alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$project -> name}}</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
          </div>
        </li>
    @endforeach
</ul>
</div>
@endsection