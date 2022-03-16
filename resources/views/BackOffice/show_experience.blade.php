@extends('..BackLayouts.app')

@section('content')
    

<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">create new experience</h1>
        <form action="/admin.update_experience/{{$experience->id}}" method="post" class="form-group col-md-6 offset-3">
            @csrf
            @method('PUT')
            <label for="start_date" class="mt-2">title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                placeholder="title" value="{{$experience->title}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="start_date" class="mt-2">company name</label>
            <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                placeholder="company name" value="{{$experience->company_name}}">
            @error('company_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="start_date" class="mt-2">started at</label>
            <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{$experience->start_date}}">
            @error('start_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="end_date" class="mt-2">to</label>
            <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{$experience->end_date}}">
            @error('end_date')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-floating">
                <textarea name="description" class="form-control mt-2 @error('description') is-invalid @enderror"
                    placeholder="describe your post here" id="floatingTextarea2" style="height: 100px">value="{{$experience->description}}"</textarea>
                <label for="floatingTextarea2">description</label>
                @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>


              <button class="mt-2 btn btn-warning form-control">save</button>
        </form>
    </div>
</div>

@endsection