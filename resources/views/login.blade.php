@extends("layouts.master")

@section("content")
<div class="row mt-5 justify-content-center">
    <div class="col-md-6">
        <h2 class="mb-4">Login</h2>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        @endif
        <div class="card">
            <div class="card-body">
                <form action="{{ route("login.submit") }}" method="POST">
                    @csrf
                    <div class="mb-2">
                        <label for="" class="form-label">Use Name</label>
                        <input type="text" name="name" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Use Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>
                    <div class="mb-2">
                        <label for="" class="form-label">Use Password</label>
                        <input type="text" name="password" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
