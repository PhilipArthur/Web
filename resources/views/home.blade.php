@extends('welcome')

@section('content')
<body>
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <h1>Home</h1>
    @foreach($movies as $genre => $value)
        <div>
            <h2>{{$genre}}</h2>
            <div class="d-flex flex-row">
                @foreach($value as $val)
                <div class="mx-2 text-center">
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
        </div>
        @endforeach

</body>
@endsection