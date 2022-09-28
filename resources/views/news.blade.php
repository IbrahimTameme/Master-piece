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
        <h1 class="mb-4 text-black font-extrabold l uppercase tracking-wide m-5 bg-white p-5" style="font-size:50px">News</h1>

      <div class="document-container" style="margin-top: 20px">
        <div class="center-content opening-cards">
          <a class="first-card" href="javascript:void(0);">
            <div class="card-img-container">
              <img
                src="https://imgresizer.eurosport.com/unsafe/725x408/filters:format(jpeg):focal(1242x322:1244x320)/origin-imgresizer.eurosport.com/2022/09/27/3461367-70612508-2560-1440.jpg"
                alt="drowning image"
              />
            </div>
            <p>Jimmy Maguire goes from Manunited to Real madrid</p>
          </a>
          <a href="javascript:void(0);">
            <div class="card-img-container">
              <img
                src="https://static.toiimg.com/photo/msid-94447941/94447941.jpg"
                alt="Scientists Discover"
              />
            </div>
            <p>
             Tennis player scavog lose his last fight 
            </p>
          </a>
          <a href="javascript:void(0);">
            <div class="card-img-container">
              <img
                src="https://sportshub.cbsistatic.com/i/r/2022/07/23/6ee03e44-8cfe-443c-93a8-97f03a078da9/thumbnail/450x253/8f7243cc09ab5e38ea3d6d01a75cd5a3/rudy-gobert-karl-anthony-towns-usatsi.jpg"
                alt="Mug Shot"
              />
            </div>
            <p>
             Basketball team wins 99-98 over in the USA while losing to other team 120-122 and transform the tournaments 
            </p>
          </a>
        </div>
      </div>
    

      <div class="mt-5 container" style="background-color: white">

        <div >
            
            <h1 class="mb-4 text-black font-extrabold l uppercase tracking-wide p-5" style="font-size:50px">Latest</h1>     
            
          </div>
       

    @foreach ($news_data->sources as $data)

    <div class="mb-4 bg-white shadow-lg rounded-md overflow-hidden my-5 px-3 py-5  md:flex">
      <div class="p-8">
        <div class="uppercase text-sm tracking-wide font-bold text-blue-900" >{{$data->category}}</div>
        <a href="{{$data->url}}" class="block mt-1 text-lg font-semibold text-blue-900 hover:text-blue-700" style="font-size:35px; color:blue">{{$data->name}}</a>
        <p class="mt-2 text-gray-700">{{$data->description}}</p>
      </div>
    </div>


    
    @endforeach

   

    {{-- {{$news_data->sources[0]->id}} --}}
</div> 
   </div>
@endsection

