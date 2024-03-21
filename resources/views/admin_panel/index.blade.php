@extends('admin_panel.master')

@section('admin')

<div class="page-content">
    <div class="container-fluid">

        {{-- START PAGE TITLE --}}

        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Dashboard</h4>
                </div>
            </div>
        </div>

        {{-- END PAGE TITLE --}}

        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="dropdown float-end">
                            <a href="#" class="dropdown-toggle arrow-none card-drop" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="mdi mdi-dots-vertical"></i>
                            </a>
                        </div>

                        <h4 class="mb-4 card-title">Recent Audits</h4>

                        <div class="table-responsive">
                            <table class="table nowrap w-100 dataTable no-footer dtr-inline" role="grid"
                                aria-describedby="state-saving-datatable_info" style="width: 1364px;">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Time</th>
                                        <th>Description</th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
