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

        <div id="datatable_wrapper" class="float-end">
            <div class="dropdown card-header-dropdown">
                <a class="btn btn-sm btn-outline-primary waves-effect waves-light" data-bs-toggle="modal"
                    data-bs-target="#addStep">Add
                </a>
            </div>
        </div>

        @include('admin_panel.components.steps.add')

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
            @foreach ($steps as $step)
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body btn btn-outline-light waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('section.index', ['processId' => $process->id])}}"
                                class="d-flex align-items-center">
                                <i class="fas fa-folder font-size-18" style="margin-right: 20px;"></i>
                                <h6 class="mb-0">{{ $step->title }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
