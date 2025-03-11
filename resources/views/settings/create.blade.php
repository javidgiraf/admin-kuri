@extends('layouts.page')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{route('settings.index')}}">Settings</a></li>
                <li class="breadcrumb-item active">Add Setting</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                

                <div class="card">
                    <div class="card-title d-flex justify-content-between m-3 mt-0">
                        <h5><strong>Add</strong> New Settings</h5>
                        <a href="{{route('settings.index')}}" class="btn btn-primary"><i class="zmdi zmdi-arrow-left" style="padding-right: 6px;"></i><span class="text-white">Back</span></a>
                    </div>
                    <div class="card-body">

                        <form method="post" enctype="multipart/form-data" action="{{route('settings.store')}}">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Option Name <span class="text-danger">*</span></label>
                                <div class="col-sm-10"> 
                                    <input type="text" id="title" name="option_name" class="form-control @error('option_name') is-invalid @enderror" value="{{ old('option_name') }}" placeholder="Enter New Option Name">
                                    @error('option_name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Option Value <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <input type="text" id="title" name="option_value" class="form-control @error('option_value') is-invalid @enderror" value="{{ old('option_value') }}" placeholder="Option Value">
                                    @error('option_value')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputText" class="col-sm-2 col-form-label">Language <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <select class="form-control select2 @error('language') is-invalid @enderror" name="language">
                                        <option selected disabled>Choose Language</option>
                                        
                                            <option value="en">{{ __('English') }}</option>
                                            <option value="ml">{{ __('Malayalam') }}</option>
                                        
                                    </select>
                                    @error('language')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">

                                <label for="inputText" class="col-sm-2 col-form-label">{{ __('Terms & Conditions') }} <span class="text-danger">*</span></label>
                                <div class="col-sm-10">
                                    <textarea id="terms_and_conditions" name="terms_and_conditions" class="form-control basic-example @error('terms_and_conditions') is-invalid @enderror" placeholder="{{ __('Terms & Conditions') }}">{!! old('terms_and_conditions') !!}</textarea>
                                </div>
                                @error('terms_and_conditions')
                                    <span class="invalid-feedback">{{ $message }}</span>
                                @enderror
                            </div>

                            <fieldset class="row mb-3">
                                <legend class="col-form-label col-sm-2 pt-0">Status <span class="text-danger">*</span></legend>
                                <div class="col-sm-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios1" value="1" checked>
                                        <label class="form-check-label" for="gridRadios1">
                                            Active
                                        </label>
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="status" id="gridRadios2" value="0">
                                        <label class="form-check-label" for="gridRadios2">
                                            Inactive
                                        </label>
                                    </div>

                                </div>
                            </fieldset>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.7.2/tinymce.min.js"></script>
<script>
    tinymce.init({
        selector: 'textarea.basic-example',
        plugins: 'preview importcss searchreplace autolink autosave save directionality code visualblocks visualchars fullscreen image link media template codesample table charmap pagebreak nonbreaking anchor insertdatetime advlist lists wordcount help charmap quickbars emoticons accordion',
        menubar: 'file edit view insert format tools table help',
        toolbar: "undo redo | accordion accordionremove | blocks fontfamily fontsize | bold italic underline strikethrough | align numlist bullist | link image | table media | lineheight outdent indent| forecolor backcolor removeformat | charmap emoticons | code fullscreen preview | save print | pagebreak anchor codesample | ltr rtl",

        menubar: false,
        toolbar_items_size: 'small',

        style_formats: [{
                title: 'Bold text',
                inline: 'b'
            },
            {
                title: 'Red text',
                inline: 'span',
                styles: {
                    color: '#ff0000'
                }
            },
            {
                title: 'Red header',
                block: 'h1',
                styles: {
                    color: '#ff0000'
                }
            },
            {
                title: 'Example 1',
                inline: 'span',
                classes: 'example1'
            },
            {
                title: 'Example 2',
                inline: 'span',
                classes: 'example2'
            },
            {
                title: 'Table styles'
            },
            {
                title: 'Table row 1',
                selector: 'tr',
                classes: 'tablerow1'
            }
        ],

        templates: [{
                title: 'Test template 1',
                content: 'Test 1'
            },
            {
                title: 'Test template 2',
                content: 'Test 2'
            }
        ],
        setup: function(ed) {
            ed.on('change', function(e) {
                tinyMCE.triggerSave();
            });
        }
    });

    $(function() {
        $(".select2").select2();
    });
</script>
@endpush