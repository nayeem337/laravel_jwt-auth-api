@extends('layouts.app')

@section('title', 'Register - JWT Auth API')

@section('content')

    <div class="row justify-content-center">

        <div class="col-12 col-md-8 col-lg-5">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4 p-md-5">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold">Create Account</h2>

                        <p class="text-muted">
                            Register a new account
                        </p>

                    </div>

                    <form>

                        <!-- Name -->
                        <div class="mb-3">

                            <label for="name" class="form-label">
                                Full Name
                            </label>

                            <input type="text" class="form-control" id="name" name="name"
                                placeholder="Enter your name" autocomplete="name" required>

                        </div>

                        <!-- Email -->
                        <div class="mb-3">

                            <label for="email" class="form-label">
                                Email Address
                            </label>

                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" autocomplete="email" required>

                        </div>

                        <!-- Password -->
                        <div class="mb-3">

                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Create a password" autocomplete="new-password" required>

                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-4">

                            <label for="password_confirmation" class="form-label">
                                Confirm Password
                            </label>

                            <input type="password" class="form-control" id="password_confirmation"
                                name="password_confirmation" placeholder="Confirm your password" autocomplete="new-password"
                                required>

                        </div>

                        <!-- Register Button -->
                        <div class="d-grid">

                            <button type="button" class="btn btn-primary btn-lg">
                                Register
                            </button>

                        </div>

                    </form>

                    <div class="text-center mt-4">

                        <p class="mb-0 text-muted">
                            Already have an account?

                            <a href="{{ route('login') }}" class="text-decoration-none fw-semibold">
                                Login Now
                            </a>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
