<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">create your profile <i class="fas fa-user"></i></h1>
        <form action="/admin.store_profile" method="post" class="form-group col-md-6 offset-3"
            enctype="multipart/form-data">
            @csrf
            <label class="mt-2">first name</label>
            <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                placeholder="first name">
            @error('first_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">last name</label>
            <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                placeholder="first name">
            @error('last_name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" name="email"
                placeholder="email">
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">phone</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
                placeholder="phone">
            @error('phone')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">address</label>
            <input type="text" class="form-control @error('address') is-invalid @enderror" name="address"
                placeholder="address">
            @error('address')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">bio</label>
            <input type="text" class="form-control @error('bio') is-invalid @enderror" name="bio" placeholder="bio">
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
            <input type="text" class="form-control @error('facebook') is-invalid @enderror" name="facebook"
                placeholder="facebook">
            @error('facebook')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">linkedin</label>
            <input type="text" class="form-control @error('linkedin') is-invalid @enderror" name="linkedin"
                placeholder="linkedin">
            @error('linkedin')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">github</label>
            <input type="text" class="form-control @error('github') is-invalid @enderror" name="github"
                placeholder="github">
            @error('github')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label class="mt-2">twitter</label>
            <input type="text" class="form-control @error('twitter') is-invalid @enderror" name="twitter"
                placeholder="twitter">
            @error('twitter')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button class="mt-2 btn btn-primary form-control">save</button>
        </form>
    </div>
</div>