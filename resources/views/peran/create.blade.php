@extends('layout.master')

@section('judul')
Tambah Peran
@endsection

@section('content')

<form action="/peran" method="post">
    @csrf

    <div class="form-group">
        <label>Film</label>
        <select class="form-control" name="film_id">
            <option value="">Pilih Film</option>
            @forelse ($film as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['judul'] }}</option>
            @empty
            @endforelse 
        </select>
    </div>

    <div class="form-group">
        <label>Cast</label>
        <select class="form-control" name="cast_id">
            <option value="">Pilih Cast</option>
            @forelse ($cast as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @empty
            @endforelse 
        </select>
    </div>
    
    
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror">
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    @error('nama')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection