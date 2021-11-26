@extends('layouts.app')
@section('content')
    
<div class="container">
    <div class="d-flex justify-content-center">
        <form action="/page" method="POST" enctype="multipart/form-data">
            @csrf
        <input type="file" name="img_path[]" class="form-control" multiple>
        <div>
            <div class="d-flex justify-content-between">
                <span class="pt-2 ml-1">name</span>
                <span class="pt-2 mr-1">الاسم</span>
            </div>
            <div class="input-group mt-1">
                <input class="form-control" type="text" name="name" placeholder="English" id="">
                <input class="form-control text-right" type="text" name="name_ar" placeholder="عربي" id="">
            </div>
        </div>
        <div class="pt-2">
            <label for="code ml-1 pb-0">Code</label>
            <input class="form-control mt-0" type="text" name="code">
        </div>
        <div class="pt-2">
            <label class="mb-0" for="description">Description</label>
            <textarea name="description" class="form-control mt-2 mt-0" cols="30" rows="10"></textarea>
            <span class="mb-0 text-right" >الوصف</span>
            <textarea name="description_ar" class="form-control mt-2" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-dark mt-1">send</button>
        </form>
    </div>
</div>

@endsection