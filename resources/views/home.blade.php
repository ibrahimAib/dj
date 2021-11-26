@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center mt-5">
<div class="d-flex  flex-column">
@foreach ($data as $d)
    <div class="A4 fs-5 mb-5" id="{{$d->id}}">
        <div class="d-flex">
            <button class="bg-light border-0" onclick="printContent({{$d->id}})">
                <img src="icon\print.svg" alt="">
            </button>
            <form action="/download/{{$d->id}}" method="post">
            @csrf
            <button class="btn btn-dark" type="submit">Download</button>
            </form>
            <h6 class="pt-2 pb-0">Code:{{$d->code}}</h6>
        </div>
        <div class="d-flex justify-content-between ">
            <div class="col-6">
                <h1 class="fs-5 text-left m-0 p-0">{{$d->name}}</h1>
            </div>
            <div class="col-6">
                <h1 class="fs-5 text-right m-0 p-0">{{$d->name_ar}}</h1>
            </div>
        </div>
        <br>
        
        <div class="d-flex justify-content-between ">
            <div class="col-6 mb-2">
                <pre  class="fs-5  m-0 border-light" id="ppp">{{$d->description}}</pre>
            </div>
            <div class="col-6 mb-2">
                <pre  class="fs-5 text-right m-0 border-light" id="ppp">{{$d->description_ar}}</pre>
            </div>
        </div>
        <div class="d-flex justify-cotnet-between">
            <div class="col-4 p-0 mr-1">
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_1}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_4}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_7}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_10}}" alt="">
                </div>
            </div>

            <div class="col-4 p-0 mr-1">
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_2}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_5}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_8}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_11}}" alt="">
                </div>
            </div>

            <div class="col-4 p-0">
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_3}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_6}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_9}}" alt="">
                </div>
                <div class="image" >
                    <img src="{{'storage/'.$d->img_path_12}}" alt="">
                </div>
            </div>
        </div>
        <hr>
    </div>
@endforeach
</div>
</div>
@endsection
