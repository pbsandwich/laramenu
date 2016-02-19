@extends('layout')

@section('title')

    Applebee's Menu

@endsection

@section('content')
    <h1>Applebee's Menu</h1>
    @foreach($contents as $content)
        <div>
            <div class='col-sm-4'>
                <div class='col-sm-4'>
                    <p><img class="img-responsive" src="/img/{{ $content->img }}" title="{{ $content->img }}"/></p>
                    <h4>{{ $content->title }}</h4>
                    <p>{{ $content->id }}</p>
                    <p>{{ $content->type }}</p>
                    <p>{{ $content->img }}</p>
                    <p>'cat_id: ' {{ $content->cat_id }}</p>
                    <p>'subcat_id: ' {{ $content->subcat_id }}</p>
                {{--<p><a href='{{ $content->link }}', target="_blank">Hairy Lipsum</a></p>--}}
            </div>
        </div>
    @endforeach

@endsection