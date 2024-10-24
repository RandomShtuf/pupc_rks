{{-- Edit Modal --}}
<div class="modal fade" id="editStep{{ $step->id }}" tabindex="-1" aria-labelledby="editStepLabel{{ $step->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editStepLabel{{ $step->id }}">Edit Step</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('step.update', $step->id)}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title{{ $step->id }}" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title{{ $step->id }}" name="title" value="{{ $step->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description{{ $step->id }}" class="form-label">Description</label>
                        <textarea class="form-control" id="description{{ $step->id }}" name="description">{{ $step->description }}</textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
