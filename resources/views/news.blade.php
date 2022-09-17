@extends('layouts.app')

@section('content')
<?php


$url =  'https://newsapi.org/v2/top-headlines/sources?category=sports&apiKey=4f5c6bce436b49fba8a20d27aaeb6547';

$respone = file_get_contents($url);
$news_data = json_decode($respone);

// print_r($news_data) 





// $respone = file_get_contents($url);
// $sport_news = json_decode($respone);


?>


   <div>

    <div class="jumbotron">
        <h1 style="font-weight: bolder; font-size:80px ; color:black">Newset News</h1>      
        <p> Read the newset and most important sport news </p>
      </div>

    @foreach ($news_data->sources as $data)


    <div class="card border-dark" style="width:70%; margin: 2%">
        <div class="card-body ">
            <img class="card-img-top " height="500px" src="https://play-lh.googleusercontent.com/JP5PdXtfZXB4PmlBjpsEbU4ZoDGhFCpcY3Q1y4q1bBTt9u35PwMuIyM1QEzTgZ_j4R0" alt="Card image cap">

        <h3 class="card-title "> <b>{{$data->name}}</b> </h3>
          <h6 class="card-subtitle mb-2 text-muted"><b>description</b> </h6>
          <p class="card-text">{{$data->description}}</p>
          <a href="{{$data->url}}" class="card-link">Go to article</a>
        </div>
      </div>
    @endforeach

   

    {{-- {{$news_data->sources[0]->id}} --}}
</div> 

@endsection

