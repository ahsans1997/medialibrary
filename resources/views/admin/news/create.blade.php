@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <form action="{{ route('news.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="exampleFormControlInput1">Title</label>
                      <input type="text" class="form-control" placeholder="Title" name="title">
                    </div>
                    <div class="form-group mt-3">
                      <label for="exampleFormControlTextarea1">Description</label>
                      <textarea class="form-control" rows="4" name="description"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" class="form-control" name="image[]" multiple>
                    </div>
                    <button type="submit" class="btn btn-primary mt-4">Submit</button>
                  </form>
            </div>
        </div>
    </div>
@endsection

