@extends('layout')

@section('title')

    Applebee's Menu

@endsection

@section('content')
    <h1>Applebee's Menu</h1>
    @foreach($contents as $content)
        <div>
            {{-- Subcategories with id = 1, 3, or 6 have additional items to display. --}}
            {{-- I used the action helper function to call the appropriate method from --}}
            {{-- the DatabaseController class. The @item method displays items from subcategories (id = 1, 3, or 6). --}}
            {{-- All other subcategories use the @subitem method to display their items. --}}

            <div class='col-sm-4'>
                <p><img class="img-responsive" src="/img/{{ $content->img }}"  title="{{ $content->img }}"/></p>
                {{--@if ($content->id == 1 or $content->id == 3 or $content->id == 6)--}}
                    <h4>Destroy</h4>
                    <h4><a href="{{ action('DatabaseController@item', ['cat_id' => $content->id]) }}">{{ $content->title }}</a></h4>
                    <a href="{{ action('DatabaseController@destroy', ['cat_id' => $content->id]) }}">Destroy</a>
                    <p>'cat_id: ' {{ $content->cat_id }}</p>
                    <p>'id: ' {{ $content->id }}</p>
                {{--@else--}}
                    {{--<h4><a href="{{ action('DatabaseController@item', ['cat_id' => $content->id]) }}">{{ $content->title }}</a></h4>--}}
                    {{--<a href="{{ action('DatabaseController@delete', ['id' => $content->id]) }}">Delete</a>--}}
                    {{--<p>'cat_id: ' {{ $content->cat_id }}</p>--}}
                    {{--<p>'id: ' {{ $content->id }}</p>--}}
                {{--@endif--}}
            </div>
        </div>
    @endforeach

@endsection
{{-- Code I used to examine database fields. :-) --}}
{{--<a href="{{ action('DatabaseController@delete', ['cat_id' => $content->cat_id]) }}">Delete</a>--}}
{{--<p>{{ $content->type }}</p>--}}
{{--<p>'cat_id: ' {{ $content->cat_id }}</p>--}}
{{--<p>'subcat_id: ' {{ $content->subcat_id }}</p>--}}
{{--<p><a href='{{ $content->link }}', target="_blank">Hairy Lipsum</a></p>--}}