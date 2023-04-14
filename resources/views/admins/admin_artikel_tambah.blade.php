@extends('admins.template_admin_master')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header pb-0">
                    <div class="d-flex align-items-center">
                        <p class="mb-0">Tambah Data</p>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <form method="POST" action="{{ url('admin-simpan-artikel')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Judul Artikel</label>
                                    <input name="judul_artikel" type="text" class="form-control" placeholder="Masukkan Judul Artikel" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Caption Artikel</label>
                                    <input name="caption_artikel" type="text" class="form-control" placeholder="Masukkan Caption Artikel" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                </div>
                                <div class="col-md-12">
                                    <label>Uraian Artikel</label>
                                    <textarea name="uraian_artikel" id="editor" type="text" class="form-control" placeholder="Masukkan Uraian Artikel"></textarea>
                                </div>
                                <div class="col-md-6 mt-3">
                                    <label>Foto</label>
                                    <div class="custom-file" data-text="Select your file!">
                                        <input class="form-control" name="gambar_artikel" placeholder="Upload Foto" type="file" accept="image/*" required oninvalid="this.setCustomValidity('Data Tidak Boleh Kosong')" oninput="setCustomValidity('')">
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3">
                                    <fieldset>
                                        <button type="submit" class="btn btn-primary">Tambah Data</button>
                                    </fieldset>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('ckeditor5')
<script>
    ClassicEditor
        .create(document.querySelector('#editor'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection