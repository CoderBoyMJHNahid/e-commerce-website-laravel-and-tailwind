@extends('layouts.master')
@section('title')
    @lang('Update your Category')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Category
        @endslot
        @slot('title')
            Update your Category
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Update Category</h4>
                </div><!-- end card header -->
                <div class="card-body d-flex justify-content-center">
                    <div class="col-5">
                        <form action="{{ route("mobilesentrix.category.update",$data->id) }}" class="row" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Category</label>
                                    <input type="text" class="form-control" name="category" value="{{ $data->category }}">
                                    @error("price")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12 mt-3">
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--end col-->
    </div>
    <!--end row-->

@endsection
@section('script')
    <script src="{{ URL::asset('build/libs/prismjs/prism.js') }}"></script>
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
@endsection
