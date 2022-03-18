@extends('..BackLayouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <h1 class="text-center text-secondary">create new certificate <i class="fas fa-award"></i></h1>
            <form action="/admin.store_award" method="post" class="form-group col-md-6 offset-3">
                @csrf
                <label for="certificate_name" class="mt-2">certificate name</label>
                <input type="text" class="form-control @error('certificate_name') is-invalid @enderror" name="certificate_name"
                    placeholder="certificate name">
                @error('certificate_name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                <label for="certificate_provider" class="mt-2">certificate provider</label>
                <input type="text" class="form-control @error('certificate_provider') is-invalid @enderror" name="certificate_provider"
                    placeholder="certificate provider">
                @error('certificate_provider')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror


                <label for="certificate_link" class="mt-2">certificate link (optional)</label>
                <input type="text" class="form-control @error('certificate_link') is-invalid @enderror" name="certificate_link"
                    placeholder="certificate link">
                @error('certificate_link')
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

                            <th>certificate name</th>
                            <th>certificate provider</th>
                            <th>certificate website</th>

                            <th>to</th>
                            <th colspan="2">action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($awards as $award)
                            <tr>

                                <td>{{ $award->certificate_name }}</td>
                                <td>{{ $award->certificate_provider }}</td>
                                <td>{{ $award->certificate_link}}</td>
                               
                               
                                <td>
                                    <form action="admin.destroy_award/{{ $award->id }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
    
                                    </form>
                                </td>
                                <td>
                                    <a href="/admin.show_award/{{ $award->id }}" class="btn btn-warning"><i
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
