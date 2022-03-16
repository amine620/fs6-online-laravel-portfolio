@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">create new education <i class="fas fa-graduation-cap"></i></h1>
            <form action="/admin.update_education/{{$education->id}}" method="post" class="form-group col-md-6 offset-3">
                @csrf
                @method('PUT')
                <label for="school_name" class="mt-2">school name</label>
                <input type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name"
                    placeholder="school_name" value="{{$education->school_name}}">
                @error('school_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="degree" class="mt-2">degree</label>
                <input type="text" class="form-control @error('degree') is-invalid @enderror" name="degree"
                    placeholder="degree" value="{{$education->degree}}">
                @error('degree')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label for="matter" class="mt-2">matter</label>
                <input type="text" class="form-control @error('matter') is-invalid @enderror" name="matter"
                    placeholder="matter" value="{{$education->matter}}">
                @error('matter')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="start_date" class="mt-2">started at</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" value="{{$education->start_date}}">
                @error('start_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="end_date" class="mt-2">to</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date" value="{{$education->end_date}}">
                @error('end_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <button class="mt-2 btn btn-warning form-control">save</button>
            </form>
        </div>
    </div>

   
@endsection
