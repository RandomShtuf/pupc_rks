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

        @include('admin_panel.processes.add')

        {{-- START PAGE TITLE --}}
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">
                       Processes
                    </h4>
                </div>
            </div>
        </div>

        {{-- {{ route('emergency.ecenters', ['emergencyId' => $emergency->id, 'barangayId' => $barangay->id]) }} --}}

        <div class="row">
            @foreach ($processes as $process)
            <div class="col-xl-3">
                <div class="card">
                    <div class="card-body btn btn-outline-light waves-effect">
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('section.index', ['processId' => $process->id])}}"
                                class="d-flex align-items-center">
                                <i class="fas fa-folder font-size-18" style="margin-right: 20px;"></i>
                                <h6 class="mb-0">{{ $process->name }}</h6>
                            </a>
{{--
                            <div class="dropdown">
                                <a class="btn btn-sm waves-effect waves-light" type="button"
                                    id="dropdownMenuButton_{{ $barangay->id }}" data-bs-toggle="dropdown"
                                    aria-haspopup="true" aria-expanded="false">
                                    <i class="mdi mdi-dots-vertical font-size-18"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-md-end"
                                    aria-labelledby="dropdownMenuButton_{{ $barangay->id }}">
                                    <a class="dropdown-item" type="button" data-bs-toggle="offcanvas"
                                        data-bs-target="#offcanvasRight_{{ $barangay->id }}"
                                        aria-controls="offcanvasRight_{{ $barangay->id }}"
                                        href="{{ route('emergency.ecenters', ['emergencyId' => $emergency->id, 'barangayId' => $barangay->id]) }}">
                                        <i class="dripicons-information" style="margin-right: 20px;"></i>Barangay
                                        Information
                                    </a>
                                    <a class="dropdown-item" href="#"><i class="dripicons-download"
                                            style="margin-right: 20px;"></i>Download</a>
                                </div>
                            </div> --}}

                            {{-- <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight_{{ $barangay->id }}"
                                aria-labelledby="offcanvasRightLabel_{{ $barangay->id }}">
                                <div class="offcanvas-header">
                                    <i class="fas fa-folder font-size-18" style="margin-right: 30px;"></i>
                                    <h6 class="mb-0">{{ $barangay->barangay_name }}</h6>
                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"
                                        aria-label="Close"></button>
                                </div>
                                <hr>
                                <div class="offcanvas-body">
                                    <h6>Barangay Chairman</h6>
                                    <span>{{ $barangay->barangay_chairman }}</span><br><br>

                                    <h6>Contact Number</h6>
                                    <span>{{ $barangay->contact_number }}</span>
                                    <hr>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
