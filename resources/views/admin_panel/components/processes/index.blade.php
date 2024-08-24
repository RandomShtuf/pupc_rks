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
                    data-bs-target="#addProcess">Add
                </a>
            </div>
        </div>

        @include('admin_panel.components.processes.add')

        {{-- START PAGE TITLE --}}
        <div class="row">
            <div class="col-6">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">
                        Processes
                    </h4>
                </div>
            </div>
        </div>

        <div class="row">
            {{-- @foreach ($processes as $process)
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body btn btn-outline-light waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('component.step', ['processId' => $process->id])}}"
                                class="d-flex align-items-center">
                                <i class="fas fa-folder font-size-18" style="margin-right: 20px;"></i>
                                <h6 class="mb-0">{{ $process->title }}</h6>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach --}}

            {{-- PROCESSES --}}

            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($processes as $process)
                                <tr data-id="1" style="cursor: pointer;">
                                    <td>
                                        <a href="{{ route('component.step', $process->id) }}">
                                            {{ $process->title }}
                                        </a>
                                    </td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1">
                                                <a data-bs-toggle="modal" data-bs-target="#edit"  class="waves-effect">
                                                    <i class=" ri-edit-line"></i>
                                                </a>
                                            </div>

                                            {{-- Delete family_head --}}
                                            <div class="col">
                                                <a data-bs-toggle="modal" data-bs-target="#delete"  class="waves-effect">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>

                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
