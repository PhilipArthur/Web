{{-- @extends('welcome')

@section('content')
    <h1>Detail</h1>
    {{$detail->title}}<br/>
    <img src="{{ asset("assets/$detail->photo")}}" alt=""
        style="width:200px;height:250px;"
    ><br/>
    {{$detail->description}}<br/>
    {{$detail->rating}}<br/>
    Kategori: {{ $detail->genre->name}} <br/>

    @foreach ($episodes as $item)
        <div> {{$item->episode}} </div>
        <div> {{$item->title}} </div>
        <hr>
    @endforeach

    {{ $episodes->links() }}

@endsection --}}

@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <div class="detail">
        <span class="img">
            <img src="{{ asset("assets/$detail->photo") }}" alt="" style="width:200px">
        </span>
        <span class="content">
            <h3>{{ $detail->title }}</h3> <br/> <br/>
            Category: {{ $detail->genre->name }} <br/> <br/>
            Description: {{ $detail->description }} <br/> <br/>
            Rating: {{ $detail->rating }} <br/> <br/>
        </span>
    </div>

    <div class="episode">
        <h4>Episodes</h4>
            <hr>
        @foreach ($episodes as $item)
            <div>{{ $item->episode }}</div>
            <div>{{ $item->title }}</div>
            <hr>
        @endforeach
        {{ $episodes->links() }}
    </div>
@endsection