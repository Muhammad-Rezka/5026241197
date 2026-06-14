@extends('template')

@section('title', 'Penjualan Sirup')

@section('konten')

<center>
    <h2>Penjualan Sirup</h2>
</center>

@if(session('success'))
    <p style="color: green; text-align:center">{{ session('success') }}</p>
@endif

<div style="text-align:center; margin-bottom:10px;">
    <a href="/sirup/create">+ Tambah Sirup</a>
</div>

<center>
<table border="1" cellpadding="8" cellspacing="0">
    <thead>
        <tr>
            <th>Kode</th>
            <th>Merk Sirup</th>
            <th>Stock</th>
            <th>Tersedia</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($sirup as $row)
        <tr>
            <td>{{ $row->kodesirup }}</td>
            <td>{{ $row->merksirup }}</td>
            <td>{{ $row->stocksirup }}</td>
            <td>{{ $row->tersedia == 'Y' ? 'Ya' : 'Tidak' }}</td>
            <td>
                <a href="/sirup/{{ $row->kodesirup }}/edit">Edit</a>
                <form action="/sirup/{{ $row->kodesirup }}" method="POST" style="display:inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</center>

@endsection
