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
        <label>Tahun</label>
        <input type="text" name="nama" class="form-control" value="{{ $peran->nama}}">
        @error('nama')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    
    
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection