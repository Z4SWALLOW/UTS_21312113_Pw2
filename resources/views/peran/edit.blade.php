@extends('layout.master')

@section('judul')
Edit Peran
@endsection

@section('content')

<form action="/peran/{{ $peran ->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Film</label>
        <input type="text" name="judul" value="{{ $peran->film }}" class="form-control">
        @error('judul')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Cast</label>
        <input type="text" name="ringkasan" value="{{ $peran->cast }}" class="form-control">
        @error('cast')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Tahun</label>
        <input type="text" name="nama" class="form-control" value="{{ $peran->nama}}">
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection