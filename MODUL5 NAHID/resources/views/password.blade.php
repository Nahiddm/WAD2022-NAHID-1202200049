@extends('app')
@section('content')
<div class="row">
    <div class="col-md-6">
        @if(session('success'))
        <p class="alert alert-success">{{ session('success') }}</p>
        @endif
        @if($errors->any())
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form action="{{ route('password.action') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="from-group">
                        <label for="price">Email</label>
                        <p  disabled id="email" name="email" >{{ Auth::user()->email }}</p>
                    </div>
            <div class="from-group" >
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name" name="name" 
                        value="{{ Auth::user()->nama }}">
                    </div>

                    <div class="from-group">
                        <label for="price">No_hp</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" 
                        value="{{ Auth::user()->no_hp }}">
                    </div>
            <div class="mb-3">
                <label>Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="old_password" />
            </div>
            <div class="mb-3">
                <label>New Password <span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password" />
            </div>
            <div class="mb-3">
                <label>New Password Confirmation<span class="text-danger">*</span></label>
                <input class="form-control" type="password" name="new_password_confirmation" />
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Change</button>
                <a class="btn btn-danger" href="{{ route('home') }}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection