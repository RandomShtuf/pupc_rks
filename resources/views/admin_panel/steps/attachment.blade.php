<div class="tab-pane{{ $index === 0 ? ' active' : '' }}" id="step{{ $step->id }}">
    <h4 class="card-title">{{ $step->title }}</h4>
    <p class="card-title-desc">{{ $step->description }}</p>
    <h4 class="mb-4 card-title">Attachments</h4>
    <form action="{{ route('attachment.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="process_step_id" value="{{ $step->id }}">
        <div class="row">

            <div class="col-lg-4">
                <div class="mb-3">
                    <label class="form-label" for="file">File <span class="text-danger">*</span></label>
                    <input name="file" type="file" id="file" class="form-control" required>
                    @if($errors->has('file'))
                    <div class="text-danger">{{ $errors->first('file') }}</div>
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
                    <input name="course" type="text" class="form-control" id="course" value="{{ $attachment->title }}">
                    @else
                    <input name="course" type="text" class="form-control" id="course" value="">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Description </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="description" type="text" class="form-control" id="description"
                        value="{{ $attachment->title }}">
                    @else
                    <input name="description" type="text" class="form-control" id="description" value="">
                    @endif
                </div>

                <div class="mb-3">
                    <label class="form-label" for="description">Note </label>
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <input name="note" type="text" class="form-control" id="note" value="{{ $attachment->title }}">
                    @else
                    <input name="note" type="text" class="form-control" id="note" value="">
                    @endif
                </div>
            </div>

            <div class="col-lg-8">
                <div class="mb-3">
                    @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                    <label class="form-label">{{$attachment->file}}</label>
                    <iframe src="{{ asset('attachments/' . $attachment->file) }}" width="100%" height="400"></iframe>
                    @endif
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Save Attachment</button>
    </form>
</div>
