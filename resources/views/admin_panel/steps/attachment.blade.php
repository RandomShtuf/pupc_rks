<div class="tab-pane{{ $index === 0 ? ' active' : '' }}"      >
    <h4 class="card-title">{{ $step->title }}</h4>
    <p class="card-title-desc">{{ $step->description }}</p>

    <div id="datatable_wrapper" class="float-end">
        <div class="dropdown card-header-dropdown">

            <a class="btn btn-sm btn-outline-primary waves-effect waves-light" data-bs-toggle="modal"
                data-bs-target="#share{{ $step->id }}">Share
            </a>
        </div>
    </div>

    @include('admin_panel.steps.share')

    {{-- START PAGE TITLE --}}
    <div class="row">
        <div class="col-6">
            <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                <h4 class="mb-sm-0">
                    Attachments
                </h4>
            </div>
        </div>
    </div>

    <form action="{{ route('attachment.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="process_step_id" value="{{ $step->id }}">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-3">

                    <label class="form-label" for="file">File </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="file" type="file" class="form-control" id="file" value="{{ $attachment->file }}">
                    @else
                    <input name="file" type="file" class="form-control" id="file" value="">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="title">Title </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="title" type="text" class="form-control" id="title" value="{{ $attachment->title }}">
                    @else
                    <input name="title" type="text" class="form-control" id="title" value="">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="course">Course </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="course" type="text" class="form-control" id="course" value="{{ $attachment->course }}">
                    @else
                    <input name="course" type="text" class="form-control" id="course" value="">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Description </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="description" type="text" class="form-control" id="description"
                        value="{{ $attachment->description }}">
                    @else
                    <input name="description" type="text" class="form-control" id="description" value="">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Note </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="note" type="text" class="form-control" id="note" value="{{ $attachment->note }}">
                    @else
                    <input name="note" type="text" class="form-control" id="note" value="">
                    @endif
                </div>
            </div>

            <div class="col-lg-8">
                <div class="mb-3">
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    {{-- <label class="form-label">{{$attachment->file}}</label> --}}
                    <a href="{{ asset('attachments/' . $attachment->file) }}" target="_blank">{{$attachment->file}}</a>
                    <iframe src="{{ asset('attachments/' . $attachment->file) }} " target="_blank" width="100%"
                        height="400"></iframe>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Attachment</button>
    </form>
</div>
