@extends('layout.master')

@section('judul')
Tambah Cast
@endSection

@section('content')

<form action="/cast" method="post">
    @csrf
   <div class="form-group">
    <label>Nama</label>
    <input type="text" name="nama" value="" class="form-control">
   </div>
   @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>    
   @enderror
   
   <div class="form-group">
    <label>Umur</label>
    <input type="number" name="umur" value="" class="form-control">
   </div>
   @error('umur')
        <div class="alert alert-danger">{{ $message }}</div>    
   @enderror

   <div class="form-group">
    <label>Bio</label>
    <textarea class="form-control" name="bio"> </textarea>
   </div>
   @error('bio')
        <div class="alert alert-danger">{{ $message }}</div>    
   @enderror

   <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection