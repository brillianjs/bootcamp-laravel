
@extends('layouts.main')


@section('container')
    <div>
        <form>
            <div class="mb-3">
              <label for="judul" class="form-label">Judul</label>
              <input type="text" class="form-control" id="judul">
            </div>
            <div class="mb-3">
              <label for="body" class="form-label">Content</label>
              <textarea type="text" class="form-control" id="body"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

          <div class="border mt-10">
            @foreach ($posts as $p)
                <h1>{{$p["judul"]}}</h1>
                <p>{{ $p["body"] }}</p>
            @endforeach
          </div>
    </div>
@endsection