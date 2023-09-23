<!-- Modals add menu -->
<div id="modal-form-add-hakim" class="modal fade" tabindex="-1" aria-labelledby="modal-form-add-hakim-label" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="{{ route('hakim.store') }}" method="post">
                @csrf

                <div class="modal-header">
                    <h5 class="modal-title" id="modal-form-add-hakim-label">Add Hakim</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <div class="alert alert-danger" style="display:none"></div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" id="nama" class="form-control @error('nama') is-invalid @enderror" name="nama" autofocus placeholder="Masukan Nama">
                        <!-- <x-form.validation.error name="nama" /> -->
                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="nip" class="form-label">NIP</label>
                        <input type="number" class="form-control" id="nip" placeholder="Masukan NIP" name="nip" required>
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
                            <input class="form-check-input code-switcher" type="checkbox" id="tables-small-showcode" name="status" value="1">
                        </div>
                        <x-form.validation.error name="status" />
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary " id="formSubmit">Save</button>
                </div>
            </form>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script>
$(document).ready(function(){
    $('#formSubmit').click(function(e){
        e.preventDefault();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
            }
        });

        $.ajax({
            url: "{{ url('/hakim') }}",
            method: 'post',
            data: {
                nama: $('#nama').val(),
                nip: $('#nip').val(),
                keterangan: $('#keterangan').val(),
                status: $('#status').val(),
            },
            success: function(result){
                if(result.errors)
                {
                    $('.alert-danger').html('');
                    $.each(result.errors, function(key, value){
                        $('.alert-danger').show();
                        $('.alert-danger').append('<li>'+value+'</li>');
                    });
                }
                else
                {
                    $('.alert-danger').hide();
                    $('#modal-form-add-hakim').modal('hide');
                }
            }
        });
    });
});
</script>