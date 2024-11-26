@extends('layouts.page')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit Scheme Setting</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('scheme-settings.index') }}">Scheme Settings</a></li>
                <li class="breadcrumb-item active">Edit Scheme Setting</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                

                <div class="card">
                    <div class="card-title d-flex justify-content-between m-3 mt-0">
                        <h5><strong>Edit</strong> Scheme Settings</h5>
                        <a href="{{ route('scheme-settings.index') }}" class="btn btn-primary">
                            <i class="zmdi zmdi-arrow-left" style="padding-right: 6px;"></i><span class="text-white">Back</span>
                        </a>
                    </div>
                    <div class="card-body">

                        <form method="post" enctype="multipart/form-data" action="{{ route('scheme-settings.update', $schemeSetting->id) }}">
                            @csrf
                            @method('PUT') <!-- Include this to specify the HTTP method -->

                            <!-- Scheme ID Dropdown -->
                            <div class="row mb-3">
                                <label for="scheme_id" class="col-sm-2 col-form-label">Scheme <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select id="scheme_id" name="scheme_id" class="form-control @error('scheme_id') is-invalid @enderror">
                                        <option value="" disabled>Select Scheme</option>
                                        @foreach($schemes as $scheme)
                                        <option value="{{ $scheme->id }}" {{ $scheme->id == $schemeSetting->scheme_id ? 'selected' : '' }}>
                                            {{ $scheme->title }}
                                        </option>
                                        @endforeach
                                    </select>
                                    @error('scheme_id')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Max Payable Amount -->
                            <div class="row mb-3">
                                <label for="max_payable_amount" class="col-sm-2 col-form-label">Max Payable Amount <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" id="max_payable_amount" name="max_payable_amount" class="form-control @error('max_payable_amount') is-invalid @enderror" value="{{ old('max_payable_amount', $schemeSetting->max_payable_amount) }}" placeholder="Enter Max Payable Amount">
                                    @error('max_payable_amount')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Min Payable Amount -->
                            <div class="row mb-3">
                                <label for="min_payable_amount" class="col-sm-2 col-form-label">Min Payable Amount <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="number" id="min_payable_amount" name="min_payable_amount" class="form-control @error('min_payable_amount') is-invalid @enderror" value="{{ old('min_payable_amount', $schemeSetting->min_payable_amount) }}" placeholder="Enter Min Payable Amount">
                                    @error('min_payable_amount')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Denomination -->
                            <div class="row mb-3">
                                <label for="denomination" class="col-sm-2 col-form-label">Denomination</label>
                                <div class="col-sm-10">
                                    <input type="number" id="denomination" name="denomination" class="form-control" value="{{ old('denomination', $schemeSetting->denomination) }}" placeholder="Enter Denomination">
                                </div>
                            </div>

                            <!-- Due Duration -->
                            <div class="row mb-3">
                                <label for="due_duration" class="col-sm-2 col-form-label">Due Duration <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" id="due_duration" name="due_duration" class="form-control @error('due_duration') is-invalid @enderror" value="{{ old('due_duration', $schemeSetting->due_duration) }}" placeholder="Enter Due Duration">
                                    @error('due_duration')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <!-- Status -->
                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Status <span class="text-danger">*</span></legend>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status_active" value="1" {{ $schemeSetting->status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_active">Active</label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="status_inactive" value="0" {{ $schemeSetting->status == 0 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="status_inactive">Inactive</label>
                                    </div>
                                </div>
                            </fieldset>

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Update Scheme Setting</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection