@extends('template')

@section('title', 'Kode Soal nilai_peserta')

@section('konten')
    <center>
        <br />
        <br />

        <div class="card">
            <div class="card-header">
                Form Tambah Nilai Peserta
            </div>

            <div class="card-body">
                <form action="/eas/store" method="post">
                    {{ csrf_field() }}

                    <div class="row mb-3">
                        <label for="Nilai Teori" class="col-sm-2 col-form-label">Nilai Teori</label>
                        <div class="col-sm-10">
                            <input type="text" name="Nilai Teori" id="Nilai Teori" class="form-control" maxlength="6"                required>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="NilaiPraktek" class="col-sm-2 col-form-label">Nilai Praktek</label>
                        <div class="col-sm-10">
                            <input type="text" name="NilaiPraktek" id="NilaiPraktek" class="form-control" required>
                        </div>
                    </div>

                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>

                </form>
            </div>
        <a href="/eas" class="btn btn-info"> Kembali</a>
    </center>
@endsection
