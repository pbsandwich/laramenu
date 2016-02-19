@extends('layout')

@section('title')

    Applebee's Menu

@endsection

@section('content')
    <h1>Applebee's Menu</h1>
    @foreach($contents as $content)
        <div>
            @if ($content->type == 'subcat')
                <h4>{{ $content->title }}</h4>
                <p>{{ $content->type }}</p>
                <p>{{ $content->img }}</p>
                <p>'cat_id: ' {{ $content->cat_id }}</p>
                <p>'subcat_id: ' {{ $content->subcat_id }}</p>
                {{--<p><a href='{{ $content->link }}', target="_blank">Hairy Lipsum</a></p>--}}
            @endif
        </div>
    @endforeach

@endsection