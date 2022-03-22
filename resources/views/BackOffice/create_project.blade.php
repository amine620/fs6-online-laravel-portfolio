@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">create new project <i class="fas fa-laptop"></i></h1>
            <form action="/admin.store_project" method="post" class="form-group col-md-6 offset-3" enctype="multipart/form-data">
                @csrf
                <label  class="mt-2">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    placeholder="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <div class="form-floating">
                    <textarea name="description" class="form-control mt-2 @error('description') is-invalid @enderror"
                        placeholder="describe your post here" id="floatingTextarea2" style="height: 100px"></textarea>
                    <label for="floatingTextarea2">description</label>
                    @error('description')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>


                <label  class="mt-2">repository</label>
                <input type="text" class="form-control @error('repository') is-invalid @enderror" name="repository"
                    placeholder="repository link">
                @error('repository')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label  class="mt-2">photo</label>
                <input type="file" class="form-control @error('photo') is-invalid @enderror" name="photo"
                   >
                @error('photo')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <button class="mt-2 btn btn-primary form-control">save</button>
            </form>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-3">


                <table class="table">
                    <thead class="table-dark">
                        <tr>

                            <th>title</th>
                            <th>description</th>
                            <th>photo</th>
                            <th>repository</th>
                            <th colspan="2">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($projects as $project)
                            <tr>

                                <td>{{ $project->title }}</td>
                                <td>{{ $project->description}}</td>
                                <td><img src="{{Storage::url($project->photo)}}" alt="" style="width: 50px"></td>
                                <td><a href="{{ $project->repository}}" target="_blank" rel="noopener noreferrer"><i class="fab fa-github h1"></i></a></td>
                               
                               
                                <td>
                                    <form action="admin.destroy_project/{{ $project->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
    
                                    </form>
                                </td>
                                <td>
                                    <a href="/admin.show_project/{{ $project->id }}" class="btn btn-warning"><i
                                        class="fas fa-edit"></i></a>
                                </td>

                            </tr>

                        @empty
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
