@extends('template')

@section('title', 'Tambah Sirup')

@section('konten')

<center>
    <h2>Tambah Sirup</h2>

    <form action="/sirup" method="POST">
        @csrf
        <div>
            <label>Merk Sirup</label><br>
            <input type="text" name="merksirup" maxlength="30" required>
        </div>
        <div>
            <label>Stock Sirup</label><br>
            <input type="number" name="stocksirup" min="0" required>
        </div>
        <div>
            <label>Tersedia</label><br>
            <select name="tersedia">
                <option value="Y">Ya</option>
                <option value="N">Tidak</option>
            </select>
        </div>
        <br>
        <button type="submit">Simpan</button>
        <a href="/sirup">Kembali</a>
    </form>
</center>

@endsection
