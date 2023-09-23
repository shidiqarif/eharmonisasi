<!-- Modals add menu -->
<div id="modal-form-edit-hakim-{{ $hakim->id }}" class="modal fade" tabindex="-1" aria-labelledby="modal-form-edit-hakim-{{ $hakim->id }}-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('hakim.update', $hakim->id) }}" method="post">
                @csrf
                @method('PUT')

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-edit-hakim-{{ $hakim->id }}-label">Edit Ref Hakim ({{ $hakim->nama }})</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">

                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="nama" placeholder="Masukan Nama" name="nama" value="{{ $hakim->nama }}">
                        <x-form.validation.error name="nama" />
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="number" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" value="{{ $hakim->nip }}">
                        <x-form.validation.error name="nip" />
                    </div>

                    <div class="mb-3">
                        <label for="keterangan" class="form-label">Keterangan</label>
                        <textarea type="text" class="form-control" id="keterangan" placeholder="Masukan Keterangan" name="keterangan"></textarea>
                        <x-form.validation.error name="keterangan" />
                    </div>

                    <div class="mb-3">
                        <div class="form-check form-switch form-switch-right form-switch-md">
                            <label for="status" class="form-label">Status</label>
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode" name="status" value="1" @checked($hakim->status)>
                        </div>
                        <x-form.validation.error name="status" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary ">Update</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->