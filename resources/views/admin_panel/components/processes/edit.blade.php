{{-- Edit Modal --}}
<div class="modal fade" id="editProcess{{ $process->id }}" tabindex="-1" aria-labelledby="editProcessLabel{{ $process->id }}" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProcessLabel{{ $process->id }}">Edit Process</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form method="POST" action="{{ route('process.update', $process->id)}}">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="title{{ $process->id }}" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title{{ $process->id }}" name="title" value="{{ $process->title }}">
                    </div>
                    <div class="mb-3">
                        <label for="description{{ $process->id }}" class="form-label">Description</label>
                        <textarea class="form-control" id="description{{ $process->id }}" name="description">{{ $process->description }}</textarea>
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
