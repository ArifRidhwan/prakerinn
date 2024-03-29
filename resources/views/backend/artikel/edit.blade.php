@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('artikel.update', $artikel->id) }}" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PATCH">

            @csrf
            <div class="form-group">
              <label for="">Judul Artikel</label>
              <input type="text" name="judul" id="" class="form-control" aria-describedby="helpId" value="{{$artikel->judul}}">
            </div>
            <div class="form-group">
              <label for="">Konten</label>
              <textarea name="konten" id="konten" cols="30" rows="5" class="form-control ckeditor">{{$artikel->konten}}</textarea>
            </div>
            <div class="form-group">
              <label for="">Foto</label>
              <input type="file" name="foto" id="foto" class="form-control">
            </div>
            <div class="form-group">
                <label for="categori"></label>
                <select name="categori_id" class="form-control">
                @foreach($cat as $data)
                  <option value="{{ $data->id }}">{{ $data->nama_categori }}</option>
                @endforeach
                </select>
            </div>
            <div class="form-group">
              <label for="">Tag</label>
                <select name="tag[]" class="form-control multiple" multiple>
                  @foreach($tag as $data)
                    <option value="{{ $data->id }}">
                      {{ $data->nama }}</option>
                        @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-outline-success">Simpan</button>
            <a name="" id="" class="btn btn-outline-secondary" href="{{route('artikel.index')}}" role="button">Kembali</a>

            
        </form>
    </div>
@endsection