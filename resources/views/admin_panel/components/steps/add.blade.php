{{-- Add Modal --}}
<div class="modal fade" id="addStep" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="createUserLabel">
                    Add Step</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- {{ route('process.store')}} --}}

            <div class="modal-body">
                <form action="{{ route('step.store')}}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-3">
                            <div class="mb-0 position-relative"><br>
                                <input type="hidden" name="process_id" class="form-control" value="{{ $process->id }}"
                                    readonly>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Title</label>
                                <input name='title' class="form-control" type="text" value="{{ old('title') }}">
                                @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Description</label>
                                <textarea name='description' class="form-control">{{ old('description') }}</textarea>
                                @error('description')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
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
</div>
