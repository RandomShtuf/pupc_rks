{{-- Add Modal --}}
<div class="modal fade" id="addProcess" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog"
    aria-labelledby="createUserLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="createUserLabel">
                    Add Process</h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            {{-- {{ route('process.store')}} --}}

            <div class="modal-body">
                <form action="{{ route('process.store')}}" method="POST">
                    @csrf

                    <div class="row">

                        <div class="col-md-12">
                            <div class="mb-0 position-relative"><br>
                                <label class="form-label">Name</label>
                                <input name='name' class="form-control" type="text" value="{{ old('name') }}">
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-light waves-effect waves-light" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-position">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
