@extends('layout.master')

@section('judul')
Edit Film
@endsection

@section('content')

<form action="/film/{{ $film ->id }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label>Judul</label>
        <input type="text" name="judul" value="{{ $film->judul }}" class="form-control">
        @error('judul')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Ringkasan</label>
        <input type="text" name="ringkasan" value="{{ $film->ringkasan }}" class="form-control">
        @error('ringkasan')
            <div class="btn btn-danger">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Tahun</label>
        <input type="number" name="tahun" class="form-control" value="{{ $film->ringkasan}}">
        @error('tahun')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Poster</label>
        <input type="text" name="poster" class="form-control" value="{{ $film->poster}}">
        @error('poster')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Genre_id</label>
        <input type="number" name="genre_id" class="form-control" value="{{ $film->genre_id}}">
        @error('genre_id')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection