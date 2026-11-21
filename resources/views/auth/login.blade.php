@extends('layouts.app')

@section('title', 'Login - JWT Auth API')

@section('content')

    <div class="row justify-content-center">

        <div class="col-12 col-md-8 col-lg-5">

            <div class="card shadow-sm border-0">

                <div class="card-body p-4 p-md-5">

                    <div class="text-center mb-4">

                        <h2 class="fw-bold">Welcome Back</h2>

                        <p class="text-muted">
                            Login to your account
                        </p>

                    </div>

                    <form id="loginForm">

                        <!-- Email -->
                        <div class="mb-3">

                            <label for="email" class="form-label">
                                Email Address
                            </label>

                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="Enter your email" autocomplete="email" required>

                        </div>

                        <!-- Password -->
                        <div class="mb-4">

                            <label for="password" class="form-label">
                                Password
                            </label>

                            <input type="password" class="form-control" id="password" name="password"
                                placeholder="Enter your password" autocomplete="current-password" required>

                        </div>

                        <!-- Login Button -->
                        <div class="d-grid">

                            <button type="submit" class="btn btn-primary btn-lg">
                                Login
                            </button>

                        </div>

                    </form>

                    <div class="text-center mt-4">

                        <p class="mb-0 text-muted">
                            Don't have an account?

                            <a href="{{ route('register') }}" class="text-decoration-none fw-semibold">
                                Register Now
                            </a>
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
