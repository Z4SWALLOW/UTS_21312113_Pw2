@extends('layout.master')

@section('judul')
Tambah Film
@endsection

@section('content')

<form action="/film" method="post">
    @csrf
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" value="{{ old('judul') }}" class="form-control @error('judul') is-invalid @enderror">
        @error('judul')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Ringkasan</label>
        <input type="text" name="ringkasan" value="{{ old('ringkasan') }}" class="form-control @error('ringkasan') is-invalid @enderror">
        @error('umur')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" value="{{ old('tahun') }}" class="form-control @error('tahun') is-invalid @enderror">
        @error('tahun')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Poster</label>
        <input type="text" name="poster" value="{{ old('poster') }}" class="form-control @error('poster') is-invalid @enderror">
        @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Genre_id</label>
        <select class="form-control" name="genre">
            <option value="">Pilih Genre</option>
            @forelse ($genre as $key => $item)
                <option value="{{ $item['id'] }}">{{ $item['nama'] }}</option>
            @empty
            @endforelse 
        </select>
    </div>
    @error('Poster')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection