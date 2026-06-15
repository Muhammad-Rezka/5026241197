@extends('template')

@section('title', 'Kode Soal nilai_peserta')

@section('konten')
    <center>
        <title>Kode Soal nilai_peserta</title>
        </head>

        <body>
            <h2>Kode Soal nilai_peserta</h2>
            <div class="container mt-4">
                <a href="/eas/tambah" class="btn btn-primary mb-3">
                    Tambah Data
                </a>

                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>No Peserta</th>
                            <th>Nilai Teori</th>
                            <th>Nilai Praktek</th>
                            <th>Rata-rata</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                </table>


            </div>
            <center>
            @endsection
