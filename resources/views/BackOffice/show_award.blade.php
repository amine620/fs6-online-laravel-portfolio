@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">edit your certificate <i class="fas fa-award"></i></h1>
            <form action="/admin.update_award/{{$award->id}}" method="post" class="form-group col-md-6 offset-3">
                @csrf
                @method('PUT')
                <label for="certificate_name" class="mt-2">certificate name</label>
                <input type="text" class="form-control @error('certificate_name') is-invalid @enderror" name="certificate_name"
                    placeholder="certificate name" value="{{$award->certificate_name}}">
                @error('certificate_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="certificate_provider" class="mt-2">certificate provider</label>
                <input type="text" class="form-control @error('certificate_provider') is-invalid @enderror" name="certificate_provider"
                    placeholder="certificate provider" value="{{$award->certificate_provider}}">
                @error('certificate_provider')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label for="certificate_link" class="mt-2">certificate link (optional)</label>
                <input type="text" class="form-control @error('certificate_link') is-invalid @enderror" name="certificate_link"
                    placeholder="certificate link" value="{{$award->certificate_link}}">
                @error('certificate_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button class="mt-2 btn btn-warning form-control">save</button>
            </form>
        </div>
    </div>

   
@endsection
