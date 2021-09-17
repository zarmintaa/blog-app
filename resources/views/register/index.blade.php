@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <main class="form-registration">
                <form action="/register" method="post">
                    @csrf
                    @method('post')

                    <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" name="name" id="name" placeholder="Mamang" value="{{ old('name') }}">
                        <label for="floatingInput">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="mamang" value="{{ old('username') }}">
                        <label for="floatingInput">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="name@example.com" value="{{ old('email') }}">
                        <label for="floatingInput">Email address</label>
                        @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                        <label for="floatingPassword">Password</label>
                        @error('password')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>
                </form>
                <small class="text-center d-block mt-3">Already Registered ? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>

@endsection
