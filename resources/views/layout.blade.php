@extends('app')
@section('content')

<h1>Layout Grid <span>(Drag & Drop)</span></h1>
<ul id="sortable">
      @foreach($photos as $photo)
            <li class="ui-state-default">
                  <img class="img-fluid" src="{{ $photo['thumbnailUrl'] }}" alt="{{ $photo['title'] }}" />
                  <a class="p" href="{{ $photo['url'] }}" target="_blank">{{ $photo['title'] }}</a>
            </li>
      @endforeach
</ul>

@endsection