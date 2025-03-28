<?php

use App\Models\SchemeType;
?>
@extends('layouts.page')
@push('styles')
<style>
  /* The switch - the box around the slider */
  .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
  }

  p {
    display: inline-block;
    vertical-align: middle;
    padding-top: 5px;
    padding-right: 5px;
  }

  /* Hide default HTML checkbox */
  .switch input {
    opacity: 0;
    width: 0;
    height: 0;
  }

  /* The slider */
  .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    border-radius: 34px;
  }

  .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    border-radius: 50%;
  }

  input:checked+.slider {
    background-color: #2196F3;
  }

  input:focus+.slider {
    box-shadow: 0 0 1px #2196F3;
  }

  input:checked+.slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
  }
</style>
@endpush
@section('content')

<main id="main" class="main">
  <div class="pagetitle">
    <h1>User</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a href="{{route('users.index')}}">Users</a></li>
        <li class="breadcrumb-item active">Add User</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->
  <section class="section">
    <div class="row">
      <div class="col-lg-12">


        <div class="card">
          <div class="card-title d-flex justify-content-between m-3 mt-0">
            <h5><strong>Add</strong> New User Plans</h5>
            <a href="{{route('users.index')}}" class="btn btn-primary"><i class="zmdi zmdi-arrow-left" style="padding-right: 6px;"></i><span class="text-white">Back</span></a>
          </div>
          <div class="card-body">

            <form method="post" enctype="multipart/form-data" action="{{route('subscriptions.store')}}">
              @csrf
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Select User <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <select name="user_id" class="form-control select2 @error('user_id') is-invalid @enderror" id="user_id">
                    <option value="">Select User</option>
                    @foreach($users as $user)
                      <option <?= old('user_id') == $user->id ? 'selected' : '' ?> value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                  </select>
                  @error('user_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Select Scheme <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <select name="scheme_id" class="form-control select2 @error('scheme_id') is-invalid @enderror" id="scheme_id">
                    <option value="">Select Scheme</option>
                    @foreach($schemes as $scheme)
                      <option data-scheme-type="{{ $scheme->scheme_type_id }}" <?= old('scheme_id') == $scheme->id ? 'selected' : '' ?> value="{{ $scheme->id }}" data-val="{{ $scheme->total_period }}">{{ $scheme->title }}</option>
                    @endforeach
                  </select>
                  @error('scheme_id')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <input type="hidden" name="schemeTypeId" id="schemeTypeId">
              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Select Date <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <input type="date" class="form-control @error('start_date') is-invalid @enderror" name="start_date" id="start_date" value="{{ old('start_date') }}">
                  @error('start_date')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>
              <div class="row mb-3 subscribeAmountDiv d-none">
                <label for="inputText" class="col-sm-2 col-form-label">Subscribe Amount <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <input type="text" class="form-control @error('subscribe_amount') is-invalid @enderror" name="subscribe_amount" value="{{ old('subscribe_amount') }}">
                  @error('subscribe_amount')
                    <span class="invalid-feedback">{{ $message }}</span>
                  @enderror
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputText" class="col-sm-2 col-form-label">Status <span class="text-danger">*</span></label>
                <div class="col-sm-10">
                  <div id="enabled">
                    <p>Inactive</p>
                    <label class="switch">
                      <input type="checkbox" name="status" id="togBtn" class="@error('status') is-invalid @enderror">
                      <span class="slider"></span>
                    </label>
                    <p>Active</p>
                    @error('status')
                      <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                  </div>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-sm-10">
                  <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
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
@push('scripts')

<script type="text/javascript">
  $(document).ready(function() {


    $("#togBtn").val('1');
    $("#togBtn").prop('checked', true);

    var switchStatus = false;
    $("#togBtn").on('change', function() {
      if ($(this).is(':checked')) {
        switchStatus = $(this).is(':checked');
        $("#togBtn").val('1');
      } else {
        switchStatus = $(this).is(':checked');
        $("#togBtn").val('0');
      }
    });

    let schemeTypeId = $("#scheme_id").find('option:selected').data('scheme-type');
    $("#schemeTypeId").val(schemeTypeId);
    if($("#scheme_id").find('option:selected').data('scheme-type') == <?= \App\Models\SchemeType::FIXED_PLAN ?>) {
      $('.subscribeAmountDiv').removeClass('d-none');
    }
    else {
      $('.subscribeAmountDiv').addClass('d-none');
    }

    $(document).on('change', '#scheme_id', function(){
      let schemeType = $(this).find("option:selected").data('scheme-type');
      $("#schemeTypeId").val(schemeType);
      
      if(schemeType == <?= \App\Models\SchemeType::FIXED_PLAN ?>) {
        $(".subscribeAmountDiv").removeClass('d-none');
      }
      else {
        $(".subscribeAmountDiv").addClass('d-none');
      }
    });
  });
</script>

@endpush
