@extends('template')

@section('title', 'Edit Sirup')

@section('konten')

<center>
    <h2>Edit Sirup</h2>

    <form action="/sirup/{{ $sirup->kodesirup }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Merk Sirup</label><br>
            <input type="text" name="merksirup" maxlength="30" value="{{ $sirup->merksirup }}" required>
        </div>
        <div>
            <label>Stock Sirup</label><br>
            <input type="number" name="stocksirup" min="0" value="{{ $sirup->stocksirup }}" required>
        </div>
        <div>
            <label>Tersedia</label><br>
            <select name="tersedia">
                <option value="Y" {{ $sirup->tersedia == 'Y' ? 'selected' : '' }}>Ya</option>
                <option value="N" {{ $sirup->tersedia == 'N' ? 'selected' : '' }}>Tidak</option>
            </select>
        </div>
        <br>
        <button type="submit">Update</button>
        <a href="/sirup">Kembali</a>
    </form>
</center>

@endsection
