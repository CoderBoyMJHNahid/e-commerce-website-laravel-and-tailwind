@extends('layouts.master')
@section('title')
    @lang('Update your Settings')
@endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1')
            Settings
        @endslot
        @slot('title')
            Update your Settings
        @endslot
    @endcomponent

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header align-items-center d-flex">
                    <h4 class="card-title mb-0 flex-grow-1">Update Settings</h4>
                </div><!-- end card header -->
                <div class="card-body d-flex justify-content-center">
                    <div class="col-5">
                        <form action="{{ route("update.settings") }}" class="row" method="POST">
                            @csrf
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="name">Base URL (Mobile sentrix)</label>
                                    <input type="url" class="form-control" name="api_url_sentrix" value="{{ $data?->api_url_sentrix }}">
                                    @error("api_url_sentrix")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-4">
                                    <label for="name">Graphql file url (Mobile Active)</label>
                                    <input type="url" class="form-control" name="api_url_active" value="{{ $data?->api_url_active }}">
                                    @error("api_url_active")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-4">
                                    <label for="name">Twilio SID</label>
                                    <input type="text" class="form-control" name="sid" value="{{ $data?->sid }}">
                                    @error("sid")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-4">
                                    <label for="name">Twilio Token</label>
                                    <input type="text" class="form-control" name="token" value="{{ $data?->token }}">
                                    @error("token")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-4">
                                    <label for="name">Twilio What'sapp Number</label>
                                    <input type="text" class="form-control" name="twilio_number" value="{{ $data?->twilio_number }}">
                                    @error("twilio_number")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-4">
                                    <label for="name">Mobile Active Order Message Receiver Number with Country Code</label>
                                    <input type="text" class="form-control" name="send_number" value="{{ $data?->send_number }}">
                                    @error("send_number")
                                        <div class="alert alert-danger mt-2 mb-0">
                                            <p class="m-0">{{ $message }}</p>
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group mt-4">
                                    <label for="name">Mobile Sentrix Order Message Receiver Number with Country Code</label>
                                    <input type="text" class="form-control" name="send_number2" value="{{ $data?->send_number2 }}">
                                    @error("send_number2")
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
