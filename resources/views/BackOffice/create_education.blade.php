@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">create new education <i class="fas fa-graduation-cap"></i></h1>
            <form action="/admin.store_education" method="post" class="form-group col-md-6 offset-3">
                @csrf
                <label for="school_name" class="mt-2">school name</label>
                <input type="text" class="form-control @error('school_name') is-invalid @enderror" name="school_name"
                    placeholder="school_name">
                @error('school_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="degree" class="mt-2">degree</label>
                <input type="text" class="form-control @error('degree') is-invalid @enderror" name="degree"
                    placeholder="degree">
                @error('degree')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label for="matter" class="mt-2">matter</label>
                <input type="text" class="form-control @error('matter') is-invalid @enderror" name="matter"
                    placeholder="matter">
                @error('matter')
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

                            <th>school name</th>
                            <th>degree</th>
                            <th>matter</th>
                            <th>started at</th>
                            <th>to</th>
                            <th colspan="2">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($educations as $education)
                            <tr>

                                <td>{{ $education->school_name }}</td>
                                <td>{{ $education->degree}}</td>
                                <td>{{ $education->matter}}</td>
                                <td>{{ $education->start_date }}</td>
                                <td>{{ $education->end_date }}</td>
                                <td>
                                    <form action="admin.destroy_education/{{ $education->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
    
                                    </form>
                                </td>
                                <td>
                                    <a href="/admin.show_education/{{ $education->id }}" class="btn btn-warning"><i
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
