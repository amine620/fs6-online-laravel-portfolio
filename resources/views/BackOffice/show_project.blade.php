@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">edit project <i class="fas fa-laptop"></i></h1>
            <form action="/admin.update_project/{{$project->id}}" method="post" class="form-group col-md-6 offset-3" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <label  class="mt-2">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    placeholder="title" value="{{$project->title}}">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-floating">
                    <textarea name="description" class="form-control mt-2 @error('description') is-invalid @enderror"
                        placeholder="describe your post here" id="floatingTextarea2" style="height: 100px">{{$project->description}}</textarea>
                    <label for="floatingTextarea2">description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <label  class="mt-2">repository</label>
                <input type="text" class="form-control @error('repository') is-invalid @enderror" name="repository"
                    placeholder="repository link" value="{{$project->repository}}">
                @error('repository')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label  class="mt-2">photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo" value="{{$project->photo}}"
                   >
                @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button class="mt-2 btn btn-warning form-control">save</button>
            </form>
        </div>
    </div>
@endsection
