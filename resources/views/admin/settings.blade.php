@extends('layouts.app')

@section('title', 'Settings | Admin CMM Store')

@section('content')

    <!-- Session Status -->
    <div class="col-md-12">
        <x-auth-session-status class="mb-4" :status="session('status')" />
    </div>

    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <form action="{{ route('admin.store.settings') }}" method="POST" enctype="multipart/form-data" id="settingsForm">
                @csrf

                <div class="card-body">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="title" class="form-label">Site Title
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="title" name="title" class="form-control"
                                placeholder="Enter Site Name"
                                value="{{ CustomHelper::settings('title') ? CustomHelper::settings('title') : old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="powered_by" class="form-label">Powered By Name
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="powered_by" name="powered_by" class="form-control"
                                placeholder="Enter Powered By Name"
                                value="{{ CustomHelper::settings('powered_by') ? CustomHelper::settings('powered_by') : old('powered_by') }}">
                            @error('powered_by')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="email" class="form-label">Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" id="email" name="email" class="form-control"
                                placeholder="Enter Email"
                                value="{{ CustomHelper::settings('email') ? CustomHelper::settings('email') : old('email') }}">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="admin_email" class="form-label">Admin Email
                                <span class="text-danger">*</span>
                            </label>
                            <input type="email" id="admin_email" name="admin_email" class="form-control"
                                placeholder="Enter Admin Email"
                                value="{{ CustomHelper::settings('admin_email') ? CustomHelper::settings('admin_email') : old('admin_email') }}">
                            @error('admin_email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-text">
                            <h5 class="mb-0">Address</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="address" class="form-label">Address line 1
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="address_line_1" name="address_line_1" class="form-control"
                                placeholder="Enter Address Line 1"
                                value="{{ CustomHelper::settings('address_line_1') ? CustomHelper::settings('address_line_1') : old('address_line_1') }}">
                            @error('address_line_1')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="address" class="form-label">Address line 2
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="address_line_2" name="address_line_2" class="form-control"
                                placeholder="Enter Address Line 2"
                                value="{{ CustomHelper::settings('address_line_2') ? CustomHelper::settings('address_line_2') : old('address_line_2') }}">
                            @error('address_line_2')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="city" class="form-label">City
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="city" name="city" class="form-control"
                                placeholder="Enter City"
                                value="{{ CustomHelper::settings('city') ? CustomHelper::settings('city') : old('city') }}">
                            @error('city')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="state" class="form-label">State
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="state" name="state" class="form-control"
                                placeholder="Enter State"
                                value="{{ CustomHelper::settings('state') ? CustomHelper::settings('state') : old('state') }}">
                            @error('state')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="zipcode" class="form-label">Zipcode
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="zipcode" name="zipcode" class="form-control"
                                placeholder="Enter Zipcode"
                                value="{{ CustomHelper::settings('zipcode') ? CustomHelper::settings('zipcode') : old('zipcode') }}">
                            @error('zipcode')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="country" class="form-label">Country
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="country" name="country" class="form-control"
                                placeholder="Enter Country"
                                value="{{ CustomHelper::settings('country') ? CustomHelper::settings('country') : old('country') }}">
                            @error('country')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="contact" class="form-label">Contact
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="contact" name="contact" class="form-control"
                                placeholder="Enter Contact"
                                value="{{ CustomHelper::settings('contact') ? CustomHelper::settings('contact') : old('contact') }}">
                            @error('contact')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-text">
                            <h5 class="mb-0">SMTP</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="smtp_mailer" class="form-label">SMTP Mailer
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="smtp_mailer" name="smtp_mailer" class="form-control"
                                placeholder="Enter SMTP Mailer"
                                value="{{ CustomHelper::settings('smtp_mailer') ? CustomHelper::settings('smtp_mailer') : old('smtp_mailer') }}">
                            @error('smtp_mailer')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="smtp_host" class="form-label">SMTP Host
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="smtp_host" name="smtp_host" class="form-control"
                                placeholder="Enter SMTP Host"
                                value="{{ CustomHelper::settings('smtp_host') ? CustomHelper::settings('smtp_host') : old('smtp_host') }}">
                            @error('smtp_host')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="smtp_username" class="form-label">SMTP Username
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="smtp_username" name="smtp_username" class="form-control"
                                placeholder="Enter Username"
                                value="{{ CustomHelper::settings('smtp_username') ? CustomHelper::settings('smtp_username') : old('smtp_username') }}">
                            @error('smtp_username')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-password-toggle col-md-4 mb-3">
                            <label for="smtp_password" class="form-label">SMTP Password
                                <span class="text-danger">*</span>
                            </label>
                            <div class="input-group">
                                <input type="password" class="form-control" id="smtp_password" name="smtp_password"
                                    placeholder="Enter SMTP Password"
                                    value="{{ CustomHelper::settings('smtp_password') ? CustomHelper::settings('smtp_password') : old('smtp_password') }}"
                                    aria-describedby="smtp-password">
                                <span id="smtp-password" class="input-group-text cursor-pointer">
                                    <i class="bx bx-show"></i>
                                </span>
                            </div>
                            @error('smtp_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="smtp_port" class="form-label">SMTP Port
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="smtp_port" name="smtp_port" class="form-control"
                                placeholder="Enter SMTP Port"
                                value="{{ CustomHelper::settings('smtp_port') ? CustomHelper::settings('smtp_port') : old('smtp_port') }}">
                            @error('smtp_port')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="smtp_encryption" class="form-label">SMTP Encryption
                                <span class="text-danger">*</span>
                            </label>
                            <input type="text" id="smtp_encryption" name="smtp_encryption" class="form-control"
                                placeholder="Enter SMTP Encryption"
                                value="{{ CustomHelper::settings('smtp_encryption') ? CustomHelper::settings('smtp_encryption') : old('smtp_encryption') }}">
                            @error('smtp_encryption')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-text">
                            <h5 class="mb-0">SMTP</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label for="facebook" class="form-label">Facebook</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text">
                                    <i class='bx bxl-facebook'></i>
                                </span>
                                <input class="form-control" type="url" id="facebook" name="facebook"
                                    value="{{ CustomHelper::settings('facebook') ? CustomHelper::settings('facebook') : old('facebook') }}"
                                    placeholder="Facebook Link">
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="twitter" class="form-label">Twitter</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text">
                                    <i class='bx bxl-twitter'></i>
                                </span>
                                <input class="form-control" type="url" id="twitter" name="twitter"
                                    value="{{ CustomHelper::settings('twitter') ? CustomHelper::settings('twitter') : old('twitter') }}"
                                    placeholder="Twitter Link">
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="google" class="form-label">Google+</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text">
                                    <i class='bx bxl-google-plus'></i>
                                </span>
                                <input class="form-control" type="url" id="google" name="google"
                                    value="{{ CustomHelper::settings('google') ? CustomHelper::settings('google') : old('google') }}"
                                    placeholder="Google+ Link">
                            </div>
                        </div>
                        <div class="mb-3 col-md-6">
                            <label for="instagram" class="form-label">Instagram</label>
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-name2" class="input-group-text">
                                    <i class='bx bxl-instagram'></i>
                                </span>
                                <input class="form-control" type="url" id="instagram" name="instagram"
                                    value="{{ CustomHelper::settings('instagram') ? CustomHelper::settings('instagram') : old('instagram') }}"
                                    placeholder="Instagram Link">
                            </div>
                        </div>
                    </div>

                    <div class="divider">
                        <div class="divider-text">
                            <h5 class="mb-0">Images</h5>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-3">
                            <label for="logo" class="form-label">Logo
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="logo" name="logo" class="form-control" accept="image/*">
                            @error('logo')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            @php($logo = CustomHelper::settings('logo'))
                            @if (!empty($logo) && Storage::disk('admin')->exists($logo))
                                <div class="mt-3">
                                    <img class="img-thumbnail site-logo" src="{{ asset('assets/admin/' . $logo) }}"
                                        alt="Site Logo">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="favicon" class="form-label">Favicon
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="favicon" name="favicon" class="form-control" accept="image/*">
                            @error('favicon')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            @php($favicon = CustomHelper::settings('favicon'))
                            @if (!empty($favicon) && Storage::disk('admin')->exists($favicon))
                                <div class="mt-3">
                                    <img class="img-thumbnail site-favicon" src="{{ asset('assets/admin/' . $favicon) }}"
                                        alt="Site Favicon">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="banner" class="form-label">Banner
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="banner" name="banner" class="form-control" accept="image/*">
                            @error('banner')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            @php($banner = CustomHelper::settings('banner'))
                            @if (!empty($banner) && Storage::disk('admin')->exists($banner))
                                <div class="mt-3">
                                    <img class="img-thumbnail site-banner" src="{{ asset('assets/admin/' . $banner) }}"
                                        alt="Site Banner">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="powered_by_image" class="form-label">Powered By Image
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="powered_by_image" name="powered_by_image" class="form-control"
                                accept="image/*">
                            @error('powered_by_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            @php($powered_by_image = CustomHelper::settings('powered_by_image'))
                            @if (!empty($powered_by_image) && Storage::disk('admin')->exists($powered_by_image))
                                <div class="mt-3">
                                    <img class="img-thumbnail site-logo"
                                        src="{{ asset('assets/admin/' . $powered_by_image) }}"
                                        alt="Site Powered By Image">
                                </div>
                            @endif
                        </div>

                        <div class="col-md-4 mb-3">
                            <label for="other_image" class="form-label">Other Image
                                <span class="text-danger">*</span>
                            </label>
                            <input type="file" id="other_image" name="other_image" class="form-control"
                                accept="image/*">
                            @error('other_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror

                            @php($other_image = CustomHelper::settings('other_image'))
                            @if (!empty($other_image) && Storage::disk('admin')->exists($other_image))
                                <div class="mt-3">
                                    <img class="img-thumbnail site-logo"
                                        src="{{ asset('assets/admin/' . $other_image) }}" alt="Site Other Image">
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer pt-0">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>

@endsection
