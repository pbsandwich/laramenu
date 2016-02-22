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
                @if ($content->id == 1 or $content->id == 3 or $content->id == 6)
                    <h4><a href="{{ action('DatabaseController@item', ['cat_id' => $content->id]) }}">{{ $content->title }}</a></h4>
                @else
                    <h4><a href="{{ action('DatabaseController@subitem', ['cat_id' => $content->id]) }}">{{ $content->title }}</a></h4>
                @endif
            </div>
        </div>
    @endforeach

@endsection
{{--<p>{{ $content->type }}</p>--}}
{{--<p>'cat_id: ' {{ $content->cat_id }}</p>--}}
{{--<p>'subcat_id: ' {{ $content->subcat_id }}</p>--}}
{{--<p><a href='{{ $content->link }}', target="_blank">Hairy Lipsum</a></p>--}}