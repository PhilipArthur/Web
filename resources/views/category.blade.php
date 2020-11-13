@extends('welcome')

@section('content')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <h1 style="text-transform:uppercase">{{ app('request')->input('type')}} </h1>
    <div class="d-flex flex-row flex-wrap">
        @foreach($result as $val)
            <div class="mr-3 text-center">
                <img src={{asset("assets/$val->photo")}} alt=""
                    style="width:200px;height:250px;"
                ><br/>
                {{$val->title}} <br/>
                    <a class="btn btn-dark btn-block" href="/detail/{{$val->id}}">
                        Lihat Film
                    </a>
            </div>
        @endforeach
    </div>
@endsection