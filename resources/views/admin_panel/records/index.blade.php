@extends('admin_panel.master')

@section('admin')

@include('admin_panel.records.add')


<div class="page-content">
    <div class="container-fluid">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{$subject->name}}</h4>
        </div><br>

        <div class="row">

            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="mb-4 card-title">Add Record</h4>
                        </h4>
                        <form action="{{ route('record.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="process_id" value="{{ $process->id }}">
                            <input type="hidden" name="section_id" value="{{ $section->id }}">
                            <input type="hidden" name="subject_id" value="{{ $subject->id }}">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input name="title" id="title" class="form-control" type="text"
                                    value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="file" class="form-label">File</label>
                                <input type="file" class="form-control" id="file" name="file">
                                @error('file')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-light waves-effect waves-light"
                                    data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary waves-effect waves-light"
                                    id="sa-position">Save</button>
                            </div>
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
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($records as $record)
                                <tr data-id="{{ $record->id }}" style="cursor: pointer;">
                                    <td>
                                        <a href="{{ Storage::url($record->file) }}" target="_blank">{{ $record->file
                                            }}</a>
                                    </td>
                                    <td>{{ $record->title }}</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-1">
                                                <a href="{{ Storage::url($record->file) }}" target="_blank">
                                                    <i class="fas fa-eye text-primary"></i>
                                                </a>
                                            </div>
                                            <div class="col-1">
                                                <a href="{{ Storage::url($record->file) }}"
                                                    download="{{ $record->file }}">
                                                    <i class="fas fa-download text-primary"></i>
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
