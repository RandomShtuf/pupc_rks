@extends('admin_panel.master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">Classroom management</h4>
        </div><br>

        <div class="row">

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4 card-title">Add Record</h4>
                        </h4>

                        <form action="#" method="POST">

                            @csrf

                            <div class="row">

                                <div class="col-md-12">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Title</label>
                                        <div class="col-sm-12">
                                            <input name='title' class="form-control" type="text"
                                                value="{{ old('title') }}">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">Location</label>
                                        <div class="col-sm-12">
                                            <input name='location' class="form-control" type="text"
                                                value="{{ old('location') }}">
                                            </input>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="mb-0 position-relative"><br>
                                        <label class="form-label">File</label>
                                        <div class="input-group">
                                            <input type="file" class="form-control" id="customFile">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p></p>
                            <button type="submit" class="btn btn-primary waves-effect waves-light">Save
                            </button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="col-xl-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4 card-title">Records</h4>
                        <table id="datatable" class="table table-bordered dt-responsive nowrap"
                            style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                                <tr>
                                    <th>File</th>
                                    <th>Title</th>
                                    <th>Location</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr data-id="1" style="cursor: pointer;">
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1">
                                                <a data-bs-toggle="modal" data-bs-target="#">
                                                    <i class="fas fa-user-edit text-primary"></i>
                                                </a>
                                            </div>

                                            {{-- Delete family_head --}}
                                            <div class="col">
                                                <a data-bs-toggle="modal" data-bs-target="#">
                                                    <i class="fas fa-trash text-primary"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
