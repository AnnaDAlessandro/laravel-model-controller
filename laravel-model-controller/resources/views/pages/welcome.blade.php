@extends('layouts.app')

@section('title','Movies|Home')

@section('main')
<main>
    <div class="row">
        @foreach($movies as $item)

        <div class="card">
          <div class="card-body">
            <h4>{{$item['title']}}</h4>
            <p>Original Title:{{ $item['original_title']}}</p>
            <p>Nationality:{{ $item['nationality']}}</p>
            <p>Date:{{ $item['date']}}</p>
            <p>Vote:{{ $item['vote']}}</p>


          </div>
        </div>


        @endforeach

    </div>


</main>


@endsection