@extends('app')
@section('content')

<h1>Posts Table</h1>

<table id="example-table" class="display" style="width:100%">
      <thead>
            <tr>
                  <th>ID</th>
                  <th>User ID</th>
                  <th>Title</th>
                  <th>Body</th>
            </tr>
      </thead>
      <tbody>
            @foreach($posts as $post)
                  <tr>
                        <td>{{ $post['id'] }}</td>
                        <td>{{ $post['userId'] }}</td>
                        <td>{{ $post['title'] }}</td>
                        <td>{{ $post['body'] }}</td>
                  </tr>
            @endforeach
      </tbody>
</table>

@endsection