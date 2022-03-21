<div class="container mt-5">
    <div class="row">
        <div class="col-md-6 offset-3">
            <ul class="list-group">
                <li class="list-group-item"> <span class="fw-bold">
                        <form action="admin.destroy_profile/{{$profile->id}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger"><i class="fas fa-trash"></i></button>
                            <a href="admin.show_profile/{{$profile->id}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        </form>
                </li>
                <li class="list-group-item text-center"> <span class="fw-bold"><img
                            src="{{ Storage::url($profile->photo) }}" alt="profile_picture"
                            class="rounded-circle w-25"></li>
                <li class="list-group-item"> <span class="fw-bold">first name</span> {{ $profile->first_name }}
                </li>
                <li class="list-group-item"> <span class="fw-bold">last name</span> {{ $profile->last_name }}
                </li>
                <li class="list-group-item"> <span class="fw-bold">bio</span> {{ $profile->bio }}</li>
                <li class="list-group-item"> <span class="fw-bold">address</span> {{ $profile->address }}</li>
                <li class="list-group-item"> <span class="fw-bold">email</span> {{ $profile->email }}</li>
                <li class="list-group-item"> <span class="fw-bold">phone</span> {{ $profile->phone }}</li>
                <li class="list-group-item d-flex justify-content-around">
                    <a class="social-icon" href="{{ $profile->facebook }}"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-icon" href="{{ $profile->linkedin }}"><i class="fab fa-linkedin-in"></i></a>
                    <a class="social-icon" href="  {{ $profile->github }}"><i class="fab fa-github"></i></a>
                    <a class="social-icon" href="  {{ $profile->twitter }}"><i class="fab fa-twitter"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>