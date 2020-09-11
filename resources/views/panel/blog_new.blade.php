@extends('panel.layouts.main')
@section('content')
<div class="row">
    @include('flash::message')
    <div class="col-lg-12">
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Add Blog</h3>
                <div class="card-toolbar">
                    
                </div>
            </div>
            <!--begin::Form-->
			<form class="form" method="post" accept="{{route('blog.save')}}" enctype="multipart/form-data">
				 @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter full name" />
                            <span class="form-text text-muted">Please enter your full name</span>
                        </div>
                        <div class="col-lg-6">
                            <label>Slug:</label>
                            <input type="text" name="slug" class="form-control" placeholder="Enter contact number" />
                            <span class="form-text text-muted">Please enter your contact number</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-12">
                            <label>Content:</label>
                            <div class="input-group">
                                <textarea rows="5" type="text" name="content" class="form-control editor" placeholder="Enter your address"></textarea>
                                {{-- <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-map-marker"></i>
                                    </span>
                                </div> --}}
                            </div>
                            {{-- <span class="form-text text-muted">Please enter your address</span> --}}
                        </div>
                    
                    </div>
                    <div class="form-group row">
                        <div class="col-md-4">
                            <input type="file" class="btn btn-success" name="file_id">
                        </div>
                    </div>
                    
                    
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                        {{-- <div class="col-lg-6 text-right">
                            <button type="reset" class="btn btn-danger">Delete</button>
                        </div> --}}
                    </div>
                </div>
            </form>
            <!--end::Form-->
        </div>
        <!--end::Card-->
    </div>
</div>
@endsection
@section('scripts')
<script src="/tinymce/tinymce.bundle.js" type="text/javascript"></script>
<script>
    tinymce.init({
        selector:'.editor',
        directionality : 'rtl',
        language: 'fa_IR',
        branding: false,
        statusbar: false,
        menubar: false,
        forced_root_block : "",
        relative_urls : false,
        remove_script_host : false,
        convert_urls : true,
        height: 300,
        extended_valid_elements: 'video[controls|preload|controlsList|controlslist|width|height|src],source[src|type],audio[src|source|controls|controlslist|controlsList],embed[source|src|controls|controlstlist]',
        plugins: [
            'advlist autolink lists link image charmap preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media emoticons table paste '
        ],
        toolbar: ['undo redo | fontsizeselect formatselect |' +
        ' bold italic forecolor backcolor | alignleft aligncenter ' +
        ' alignright alignjustify | bullist numlist outdent indent |' +
        ' removeformat | customInsertButton charmap emoticons | fullscreen preview code'
        ],
    });
</script>
@endsection