@extends('admin_panel.master')

@section('admin')
<div class="page-content">
    <div class="container-fluid">

        <div class="col-xl-12">
            <div class="card" style="border-radius: 20px">
                <div class="card-body" style="height: 660px; overflow-y: auto;">
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
                    <h4 class="card-title">STEPS</h4>
                    <br>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                @foreach ($steps as $index => $step)
                                <a class="mb-2 nav-link{{ $index === 0 ? ' active' : '' }}" id="step-{{ $step->id }}"
                                    data-bs-toggle="pill" href="#step{{ $step->id }}" role="tab"
                                    onclick="showAttachmentSection('{{ $step->id }}')">
                                    {{ $index + 1 }}. {{$step->displayTitle()}}
                                </a>
                                @endforeach
                            </div>
                        </div>

                        <div class="col-md-9">
                            <div class="mt-4 tab-content text-muted mt-md-0" id="attachment-sections">
                                @foreach ($steps as $index => $step)
                                <div class="tab-pane{{ $index === 0 ? ' active' : '' }} fade show attachment-section"
                                    id="attachment-section-{{ $step->id }}" role="tabpanel"
                                    aria-labelledby="step-{{ $step->id }}">

                                    <h4 class="card-title">{{ $step->title }}</h4>
                                    <p class="card-title-desc">{{ $step->description }}</p>

                                    <div id="datatable_wrapper" class="float-end">
                                        <div class="dropdown card-header-dropdown">
                                            <a class="btn btn-sm btn-outline-primary waves-effect waves-light"
                                                data-bs-toggle="modal" data-bs-target="#share{{ $step->id }}">Share</a>
                                        </div>
                                    </div>

                                    @include('admin_panel.steps.share')

                                    {{-- START PAGE TITLE --}}
                                    <div class="row">
                                        <div class="col-6">
                                            <div
                                                class="page-title-box d-sm-flex align-items-center justify-content-between">
                                                <h4 class="mb-sm-0">Attachments</h4>
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('attachment.store') }}" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="process_step_id" value="{{ $step->id }}">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="mb-3">
                                                    <label class="form-label" for="file">File/s</label>
                                                    <input name="file" type="file" class="form-control" id="file"
                                                        multiple>
                                                    <div>
                                                        <br>
                                                        <label>Existing Attachments:</label>
                                                        <ul id="attachment-list-{{ $step->id }}">
                                                            @foreach($step->attachments as $attachment)
                                                            <li>
                                                                <a href="javascript:void(0)"
                                                                    onclick="showAttachment('{{ asset('attachments/' . $attachment->file) }}', '{{ $attachment->file }}')">
                                                                    {{ $attachment->file }}
                                                                </a>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="title">Title</label>
                                                    <input name="title" type="text" class="form-control" id="title"
                                                        value="{{ $step->attachments->isNotEmpty() ? $step->attachments->first()->title : '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="course">Course</label>
                                                    <input name="course" type="text" class="form-control" id="course"
                                                        value="{{ $step->attachments->isNotEmpty() ? $step->attachments->first()->course : '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="description">Description</label>
                                                    <input name="description" type="text" class="form-control"
                                                        id="description"
                                                        value="{{ $step->attachments->isNotEmpty() ? $step->attachments->first()->description : '' }}">
                                                </div>

                                                <div class="mb-3">
                                                    <label class="form-label" for="note">Note</label>
                                                    <input name="note" type="text" class="form-control" id="note"
                                                        value="{{ $step->attachments->isNotEmpty() ? $step->attachments->first()->note : '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-8">
                                                <div id="attachment-preview" class="mb-3">
                                                    <!-- Attachment preview will be displayed here -->
                                                </div>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Save Attachment</button>
                                    </form>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- JavaScript to handle attachment preview and dynamic loading -->
        <script>
            function showAttachmentSection(stepId) {
                var sections = document.querySelectorAll('.attachment-section');
                sections.forEach(section => {
                    section.classList.remove('active', 'show');
                });

                var targetSection = document.getElementById('attachment-section-' + stepId);
                if (targetSection) {
                    targetSection.classList.add('active', 'show');
                }
            }

            function showAttachment(url, fileName) {
                var attachmentPreview = document.getElementById('attachment-preview');
                if (attachmentPreview) {
                    var extension = fileName.split('.').pop().toLowerCase();
                    if (['jpg', 'jpeg', 'png', 'gif'].includes(extension)) {
                        attachmentPreview.innerHTML = `<img src="${url}" alt="Attachment Preview" style="max-width: 100%; max-height: 100%;">`;
                    } else if (extension === 'pdf') {
                        attachmentPreview.innerHTML = `<embed src="${url}" type="application/pdf" width="100%" height="600px" />`;
                    } else if (['docx', 'doc'].includes(extension)) {
                        attachmentPreview.innerHTML = `<iframe src="https://view.officeapps.live.com/op/embed.aspx?src=${url}" width="100%" height="600px" frameborder="0"></iframe>`;
                    } else {
                        attachmentPreview.innerHTML = `<p>File type not supported for preview.</p>`;
                    }
                }
            }

            document.addEventListener('DOMContentLoaded', function () {
                const activeStepId = document.querySelector('.nav-link.active').getAttribute('id').split('-')[1];
                showAttachmentSection(activeStepId);
            });
        </script>
    </div>
</div>
@endsection
