@extends('panel.layouts.main')
@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('flash::message')
        <!--begin::Card-->
        <div class="card card-custom gutter-b example example-compact">
            <div class="card-header">
                <h3 class="card-title">Fill your resume fields</h3>
                
            </div>
            <!--begin::Form-->
            <form class="form" id="resume-form" method="post" action="{{route('info.resume.save')}}">
                @csrf
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Range Picker</label>
                            <div class="input-daterange input-group" id="kt_datepicker_5">
                                <input type="text" class="form-control" name="start" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-ellipsis-h"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="end" />
                            </div>
                            <span class="form-text text-muted">Linked pickers for date range selection</span>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control" placeholder="Lead Product Designer" />
                            {{-- <span class="form-text text-muted">Please enter your full name</span> --}}
                        </div>
                        <div class="col-lg-6">
                            <label>Description:</label>
                            <textarea type="text" name="description" class="form-control" placeholder="Enter some text"></textarea>
                            {{-- <span class="form-text text-muted">Please enter your contact number</span> --}}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-6">
                            <label>Url:</label>
                            <div class="input-group">
                                <input name="url" type="text" class="form-control" placeholder="Enter url" />
                                <div class="input-group-append">
                                    <span class="input-group-text">
                                        <i class="la la-map-marker"></i>
                                    </span>
                                </div>
                            </div>
                            {{-- <span class="form-text text-muted">Please enter your address</span> --}}
                        </div>
                    </div>
                
                    
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-lg-6">
                            <button form="resume-form" type="submit" class="btn btn-primary mr-2">Save</button>
                            <button type="reset" class="btn btn-secondary">Cancel</button>
                        </div>
                        <div class="col-lg-6 text-right">
                            <button type="reset" class="btn btn-danger">Delete</button>
                        </div>
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
<script src="/assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>
@endsection