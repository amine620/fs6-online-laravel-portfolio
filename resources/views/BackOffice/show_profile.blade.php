@extends('..BackLayouts.app')


@section('content')
<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">edit your profile <i class="fas fa-user"></i></h1>
        <form action="/admin.update_profile/{{$profile->id}}" method="post" class="form-group col-md-6 offset-3"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label class="mt-2">first name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value={{$profile->first_name}}
                placeholder="first name">
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">last name</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value={{$profile->last_name}}
                placeholder="first name">
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" value={{$profile->email}}
                placeholder="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value={{$profile->phone}}
                placeholder="phone">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address" value={{$profile->address}}
                placeholder="address">
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">bio</label>
            <input type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" placeholder="bio" value={{$profile->bio}}>
            @error('bio')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">photo</label>
            <input type="file" name="photo" class="form-control @error('photo') is-invalid @enderror"
                placeholder="photo">
            @error('photo')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">facebook</label>
            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook" value={{$profile->facebook}}
                placeholder="facebook">
            @error('facebook')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">linkedin</label>
            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin" value={{$profile->linkedin}}
                placeholder="linkedin">
            @error('linkedin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">github</label>
            <input type="text" class="form-control @error('github') is-invalid @enderror" name="github" value={{$profile->github}}
                placeholder="github">
            @error('github')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">twitter</label>
            <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter" value={{$profile->twitter}}
                placeholder="twitter">
            @error('twitter')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button class="mt-2 btn btn-warning form-control">save</button>
        </form>
    </div>
</div>
@endsection