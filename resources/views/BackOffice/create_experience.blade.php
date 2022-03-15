@extends('..BackLayouts.app')

@section('content')
    

<div class="container mt-5">
    <div class="row">
        <h1 class="text-center text-secondary">create new experience</h1>
        <form action="" method="post" class="form-group col-md-6 offset-3">
            @csrf
            <label for="start_date" class="mt-2">title</label>
             <input type="text" class="form-control" name="title" placeholder="title">

             <label for="start_date" class="mt-2">company name</label>
             <input type="text" class="form-control" name="company_name" placeholder="company name">

             <label for="start_date" class="mt-2">started at</label>
             <input type="date" class="form-control" name="start_date" placeholder="company name">

             <label for="end_date" class="mt-2">to</label>
             <input type="date" class="form-control" name="end_date" placeholder="company name">
             <div class="form-floating">
                <textarea class="form-control mt-2" placeholder="describe your post here" id="floatingTextarea2" style="height: 100px"></textarea>
                <label for="floatingTextarea2">description</label>
              </div>

              <button class="mt-2 btn btn-primary form-control">save</button>
        </form>
    </div>
</div>
@endsection