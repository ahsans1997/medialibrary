@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                        <th scope="col">Image</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($news as $n)
                        <tr>
                            <td>{{ $n->title }}</td>
                            <td>{{ $n->description }}</td>
                            <td>
                                @foreach ($n->getMedia('news') as $item)
                                    <img style="width: 100px" src="{{ $item->getUrl() }}" alt="">
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('news.edit',$n->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('news.destroy',$n->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
@endsection

