@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">edit your interest <i class="fas fa-magic"></i></h1>
            
            <form action="/admin.update_interest/{{$interest->id}}" method="post" class="form-group col-md-6 offset-3">
                @csrf
                @method('PUT')
                <div class="form-floating">
                    <textarea name="content" class="form-control mt-2 @error('content') is-invalid @enderror"
                        placeholder="describe your post here" id="floatingTextarea2" style="height: 100px">{{$interest->content}}</textarea>
                    <label for="floatingTextarea2">content</label>
                    @error('content')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <button class="mt-2 btn btn-warning form-control">save</button>
            </form>
        </div>
    </div>

   
@endsection
