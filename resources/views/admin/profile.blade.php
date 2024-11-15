@extends('layouts.app')

@section('title', 'Profile | Admin CMM Store')

@section('content')

    <!-- Session Status -->
    <div class="col-md-12">
        <x-auth-session-status class="mb-4" :status="session('status')" />
    </div>
    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Account Details</h5>
                <p class="m-0">Update your account's profile information and email address.</p>
            </div>
            <hr class="my-0">
            <!-- Account -->
            <div class="card-body">

                <form method="post" action="{{ route('admin.profile.update') }}">
                    @csrf
                    @method('patch')
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <label for="name" class="form-label">Name</label>

                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Your Name" value="{{ old('name', $user->name) }}"
                                    aria-describedby="basic-icon-default-name2">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <div class="mb-3 col-md-12">
                            <label for="email" class="form-label">Email</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text"><i
                                        class="bx bx-envelope"></i></span>
                                <input class="form-control" type="text" id="email" name="email"
                                    value="{{ old('email', $user->email) }}" placeholder="Email">
                            </div>
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                    </div>
                </form>
            </div>
            <!-- /Account -->
        </div>
    </div>

    <div class="col-md-6">
        <div class="card mb-4">
            <div class="card-header">
                <h5>Update Password</h5>
                <p class="m-0">Ensure your account is using a long, random password to stay secure.</p>
            </div>
            <hr class="my-0">
            <!-- Update Password -->
            <div class="card-body">
                <form method="post" action="{{ route('password.update') }}">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="mb-3 col-md-12">
                            <div class="form-password-toggle">
                                <label for="update_password_current_password" class="form-label">
                                    Current Password
                                </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-lock"></i></span>
                                    <input type="password" class="form-control" id="update_password_current_password"
                                        name="current_password" placeholder="Current Password" aria-describedby="password">
                                    <span id="password" class="input-group-text cursor-pointer">
                                        <i class="bx bx-show"></i>
                                    </span>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
                        </div>

                        <div class="mb-3 col-md-12">
                            <div class="form-password-toggle">
                                <label for="update_password_password" class="form-label">
                                    New Password
                                </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-lock"></i></span>
                                    <input type="password" class="form-control" id="update_password_password"
                                        name="password" placeholder="New Password" aria-describedby="new-password">
                                    <span id="new-password" class="input-group-text cursor-pointer">
                                        <i class="bx bx-show"></i>
                                    </span>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
                        </div>

                        <div class="mb-3 col-md-12">
                            <div class="form-password-toggle">
                                <label for="update_password_password_confirmation" class="form-label">
                                    Confirm Password
                                </label>
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i class="bx bx-lock"></i></span>
                                    <input type="password" class="form-control" id="update_password_password_confirmation"
                                        name="password_confirmation" placeholder="Confirm Password"
                                        aria-describedby="conf-password">
                                    <span id="conf-password" class="input-group-text cursor-pointer">
                                        <i class="bx bx-show"></i>
                                    </span>
                                </div>
                                <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
                            </div>
                        </div>
                    </div>
                    <div class="mt-2">
                        <button type="submit" class="btn btn-primary me-2">Save</button>
                    </div>
                </form>
            </div>
            <!-- /Update Password -->
        </div>
    </div>

@endsection
