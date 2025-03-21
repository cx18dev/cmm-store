@extends('layouts.app')

@section('title', 'Category | Admin CMM Store')

@section('style')
    <style>
        .editor-container {
            height: 100vh;
        }

        textarea.tinymce-editor {
            height: 100%;
        }
    </style>
@endsection

@section('content')

    <div class="col-lg-12 mb-4 order-0">

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show border-2" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show border-2" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card">
            @if (isset($usedCMM->id))
                @php
                    $action = route('admin.used-cmm.update', $usedCMM->id);
                @endphp
            @else
                @php
                    $action = route('admin.used-cmm.store');
                @endphp
            @endif
            <form action="{{ $action }}" method="POST" enctype="multipart/form-data" id="categoryForm">
                @csrf
                @if (isset($usedCMM->id))
                    @method('PUT')
                @endif

                <div class="card-body">
                    <div class="row g-2">
                        <div class="col-md-6 mb-3">
                            <label for="cmm_name" class="form-label">CMM Name</label>
                            <input type="text" id="cmm_name" name="cmm_name" class="form-control"
                                placeholder="Enter CMM Name" value="{{ old('cmm_name', $usedCMM->cmm_name ?? '') }}">
                            @error('cmm_name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="stock_number" class="form-label">CMM Stock Number</label>
                            <input type="text" id="stock_number" name="stock_number" class="form-control"
                                placeholder="Enter CMM Stoke Number"
                                value="{{ old('stock_number', $usedCMM->stock_number ?? '') }}">
                            @error('stock_number')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="measuring_range" class="form-label">Measuring Range</label>
                            <input type="text" id="measuring_range" name="measuring_range" class="form-control"
                                placeholder="Enter Measuring Range"
                                value="{{ old('measuring_range', $usedCMM->measuring_range ?? '') }}">
                            @error('measuring_range')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="software" class="form-label">Software</label>
                            <input type="text" id="software" name="software" class="form-control"
                                placeholder="Enter Software" value="{{ old('software', $usedCMM->software ?? '') }}">
                            @error('software')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="probe_head" class="form-label">Probe Head</label>
                            <input type="text" id="probe_head" name="probe_head" class="form-control"
                                placeholder="Enter Probe Head" value="{{ old('probe_head', $usedCMM->probe_head ?? '') }}">
                            @error('probe_head')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="touch_probe" class="form-label">Touch Probe</label>
                            <input type="text" id="touch_probe" name="touch_probe" class="form-control"
                                placeholder="Enter Touch Probe"
                                value="{{ old('touch_probe', $usedCMM->touch_probe ?? '') }}">
                            @error('touch_probe')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="availablility" class="form-label">Availability</label>
                            <input type="text" id="availablility" name="availablility" class="form-control"
                                placeholder="Enter Availability"
                                value="{{ old('availablility', $usedCMM->availablility ?? '') }}">
                            @error('availablility')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" id="image" name="image" class="form-control"
                                placeholder="select Image" value="{{ old('image', $usedCMM->image ?? '') }}">
                            @error('image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                            <div class="mt-3">
                                @if (isset($usedCMM))
                                    <div><img src="{{ asset('assets/admin/UsedCMM/' . $usedCMM->image) }}" width="100"
                                            height="100"></div>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-8 mb-3">
                            <label for="pc" class="form-label">PC</label>
                            <div id="pc-container">
                                <!-- First input field always visible with no delete button -->
                                <div class="pc-input-group d-flex align-items-center mb-2" data-id="0">
                                    <input type="text" name="pc[]"
                                        class="form-control me-2 @error('pc.0') is-invalid @enderror"
                                        placeholder="Enter PC" value="{{ old('pc.0', $usedCMM->pc[0] ?? '') }}">
                                    @error('pc.0')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <!-- Loop through other pc[] inputs if available -->
                                @foreach (old('pc', $usedCMM->pc ?? []) as $index => $pcValue)
                                    @if ($index > 0)
                                        <!-- Skip the first input, it's handled above -->
                                        <div class="pc-input-group d-flex align-items-center mb-2"
                                            data-id="{{ $index + 1 }}">
                                            <input type="text" name="pc[]" class="form-control me-2"
                                                placeholder="Enter PC" value="{{ old('pc.' . $index, $pcValue) }}">
                                            @error('pc.' . $index)
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <button type="button" class="btn btn-danger btn-sm remove-pc"
                                                data-id="{{ $index + 1 }}">
                                                <i class="fas fa-minus"></i> Remove
                                            </button>
                                        </div>
                                    @endif
                                @endforeach
                            </div>

                            <!-- Add button below all the input fields -->
                            <button type="button" class="btn btn-primary btn-sm mt-2" id="add-pc">
                                <i class="fas fa-plus"></i> Add More
                            </button>

                            @error('pc')
                                <div class="text-danger mt-2">{{ $message }}</div>
                            @enderror
                        </div>


                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                    <a href="{{ route('admin.used-cmm.index') }}" class="btn btn-outline-secondary">Close</a>
                </div>
            </form>
        </div>
    </div>

@endsection

@section('script')
    <script>


        let counter = {{ count(old('pc', $usedCMM->pc ?? [])) + 1 }}; // Start from the next available data-id

        // Add a new input field when the 'Add More' button is clicked
        document.getElementById('add-pc').addEventListener('click', function() {
            var container = document.getElementById('pc-container');
            var newInputGroup = document.createElement('div');
            newInputGroup.classList.add('pc-input-group', 'd-flex', 'align-items-center', 'mb-2');
            newInputGroup.setAttribute('data-id', counter);

            newInputGroup.innerHTML = `
        <input type="text" name="pc[]" class="form-control me-2" placeholder="Enter PC">
        <button type="button" class="btn btn-danger btn-sm remove-pc" data-id="${counter}">
            <i class="fas fa-minus"></i> Remove
        </button>
    `;

            container.appendChild(newInputGroup);
            counter++;
        });

        // Remove an input field when the 'Remove' button is clicked
        document.getElementById('pc-container').addEventListener('click', function(event) {
            if (event.target.classList.contains('remove-pc')) {
                const dataId = event.target.getAttribute('data-id');
                const inputGroup = document.querySelector(`[data-id='${dataId}']`);
                inputGroup.remove();
            }
        });
    </script>
@endsection
