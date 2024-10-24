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
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4 card-title">Steps</h4>
                        <table class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($steps as $step)
                                <tr data-id="1" style="cursor: pointer;">
                                    <td> {{ $step->title }} </td>
                                    <td>{{ $step->description }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1">
                                                <a data-bs-toggle="modal" data-bs-target="#editStep{{ $step->id }}" class="waves-effect">
                                                    <i class="ri-edit-line"></i>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a data-bs-toggle="modal" data-bs-target="#delete{{ $step->id }}" class="waves-effect">
                                                    <i class="ri-delete-bin-7-line"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @include('admin_panel.components.steps.edit', ['step' => $step])
                                @include('admin_panel.components.steps.delete', ['step' => $step])
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<script src="{{ asset('js/editStep.js') }}"></script>
@endsection
