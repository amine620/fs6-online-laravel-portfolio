@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">create new experience</h1>
            <form action="/store_experience" method="post" class="form-group col-md-6 offset-3">
                @csrf
                <label for="start_date" class="mt-2">title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    placeholder="title">
                @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="start_date" class="mt-2">company name</label>
                <input type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name"
                    placeholder="company name">
                @error('company_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="start_date" class="mt-2">started at</label>
                <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date">
                @error('start_date')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="end_date" class="mt-2">to</label>
                <input type="date" class="form-control @error('end_date') is-invalid @enderror" name="end_date">
                @error('end_date')
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
                            <th>company name</th>
                            <th>started at</th>
                            <th>to</th>
                            <th>action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($experiences as $experience)
                            <tr>

                                <td>{{ $experience->title }}</td>
                                <td>{{ $experience->company_name }}</td>
                                <td>{{ $experience->start_date }}</td>
                                <td>{{ $experience->end_date }}</td>
                                <td>
                                    <form action="destroy_experience/{{ $experience->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                                        <a href="/admin.show_experience/{{ $experience->id }}" class="btn btn-warning"><i
                                                class="fas fa-edit"></i></a>
                                    </form>
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
