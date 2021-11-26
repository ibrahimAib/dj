@extends('layouts.app')

@section('content')
<div class="container d-flex flex-column p-0">
@foreach ($data as $d)
    <div class="" id="{{$d->id}}">
        <div class="d-flex fc-gray">
            <button class="bg-light border-0" onclick="printContent({{$d->id}})">
                <img src="icon\print.svg" alt="">
            </button>
            <form action="/download/{{$d->id}}" method="post">
            @csrf
            <button class="border-0 bg-light" type="submit">
                <img src="icon\download.svg" alt="">
            </button>
            </form>
            <h6 class="pt-2 pb-0">Code:{{$d->code}}</h6>
        </div>
{{-- description and name --}}
        <div class="row">
            <div class="col-md-6 col-sm-12 text-left p-0 pr-1">
                <h2>{{$d->name}}</h2>
                <pre>
                    {{$d->description}}
                </pre>
            </div>
            <div class="col-md-6 col-sm-12 text-right p-0 pl-1">
                <h2>{{$d->name_ar}}</h2>
                <pre>
                    {{$d->description_ar}}
                </pre>
            </div>
        </div>
        {{-- images --}}
        <div class="row">
            <div class="col-md-6 col-ms-12 image">
                <img src="{{ 'storage/'. $d->img_path_1 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_3 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_5 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_7 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_9 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_11 }}" alt="">
            </div>
            <div class="col-md-6 col-ms-12 image">
                <img src="{{ 'storage/'. $d->img_path_2 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_4 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_6 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_8 }}" alt="">
                <img src="{{ 'storage/'. $d->img_path_10 }}" alt="">
            </div>
        </div>
    </div>
    <hr>
    @endforeach
</div>
@endsection
