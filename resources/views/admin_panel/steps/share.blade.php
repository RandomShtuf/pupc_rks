{{-- Share Modal --}}
<div class="modal fade" id="share{{ $step->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createUserLabel">
                    Share Attachment</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form action="{{ route('share.attachment') }}" method="POST">
                    @csrf

                    <div class="row">
                        @if($step->attachments->isNotEmpty() && $attachment = $step->attachments->first())
                            <input name="process_step_attachment_id" type="hidden" class="form-control" id="title" value="{{ $attachment->id }}">
                        @else
                            <input name="process_step_attachment_id" type="hidden" class="form-control" id="title" value="">
                        @endif

                        <div class="col-md-12">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Are you sure to share this with the auditor?</label>
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect waves-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-position">Share</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

