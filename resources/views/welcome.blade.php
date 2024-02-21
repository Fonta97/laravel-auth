@extends('layouts.app')
@section('content')

<div class="text-center mt-4">
<h1>Portfolio</h1>
<ul class="d-flex justify-content-center flex-wrap" >
    @foreach ($projects as $project)
        <li class="list-group-item disabled">
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{$project -> img}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$project -> name}}</h5>
                    <p class="card-text">{{$project -> description}}</p>
                   
                </div>
          </div>
        </li>
    @endforeach
</ul>
</div>
@endsection