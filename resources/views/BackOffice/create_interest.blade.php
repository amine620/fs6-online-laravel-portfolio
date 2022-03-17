@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">create your interest <i class="fas fa-magic"></i></h1>
            <form action="/admin.store_interest" method="post" class="form-group col-md-6 offset-3">
                @csrf
                <div class="form-floating">
                    <textarea name="content" class="form-control mt-2 @error('content') is-invalid @enderror"
                        placeholder="describe your post here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">content</label>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="mt-2 btn btn-primary form-control">save</button>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-3">

               @foreach ($interests as $interest)

               <p class="text-secondary mt-5">{{$interest->content}}</p>
               <form action="/admin.destroy_interest/{{$interest->id}}" method="post">
                   @csrf
                   @method("DELETE")
                   <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                   <a href="/admin.show_interest/{{$interest->id}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
               </form>
               @endforeach
               
            </div>
        </div>
    </div>
@endsection
