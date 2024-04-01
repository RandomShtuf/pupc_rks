@extends('admin_panel.master')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        @if (Session::has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-2"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('success') }}
        </div>
        @endif

        @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="mdi mdi-check-all me-2"></i>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            {{ Session::get('error') }}
        </div>
        @endif

        {{-- START PAGE TITLE --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">
                        Steps
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4 card-title">{{ $process->title }}</h4>

                        <div id="progrss-wizard" class="twitter-bs-wizard">
                            <ul class="twitter-bs-wizard-nav nav-justified nav nav-pills">
                                @foreach ($steps as $index => $step)
                                <li class="nav-item">
                                    <a href="#step{{ $step->id }}" class="nav-link{{ $index === 0 ? ' active' : '' }}"
                                        data-toggle="tab">
                                        <span class="step-number">{{ $index + 1 }}</span>
                                        <span class="step-title">{{ $step->title }}</span>
                                        <span>{{$step->description}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>

                            <div id="bar" class="mt-4 progress">
                                <div class="progress-bar bg-success progress-bar-striped progress-bar-animated" style="width: 25%;"></div>
                            </div>

                            <div class="tab-content twitter-bs-wizard-tab-content">
                                @foreach ($steps as $index => $step)
                                <div class="tab-pane{{ $index === 0 ? ' active' : '' }}" id="step{{ $step->id }}">
                                    <form action="{{ route('attachment.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="process_step_id" value="{{ $step->id }}">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="file">File <span class="text-danger">*</span></label>
                                                    <input name="file" value="{{$step->file}}" type="file" id="file" class="form-control"
                                                        required>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="title">Title </label>
                                                    <input name="title" value="{{$step->title}}" type="text" class="form-control" id="title">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="course">Course</label>
                                                    <input name="course" type="text" class="form-control" id="course">
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <!-- Additional form fields can be added here -->
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="description">Description</label>
                                                    <textarea name="description" class="form-control" id="description"
                                                        rows="2" ></textarea>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="note">Note</label>
                                                    <textarea name="note" class="form-control" id="note" rows="2"
                                                        ></textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Save Attachment</button>
                                    </form>
                                </div>
                                @endforeach
                            </div>

                            <ul class="pager wizard twitter-bs-wizard-pager-link">
                                <li class="previous"><a href="javascript: void(0);">Previous</a></li>
                                <li class="next"><a href="javascript: void(0);">Next</a></li>
                            </ul>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
