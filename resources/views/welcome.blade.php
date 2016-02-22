@extends('layout')

@section('title')

    Applebee's Menu

@endsection



@section('content')
    <h1>Applebee's Menu</h1>
    @foreach($contents as $content)
        <div>

    {{-- I used three views to display our menu: welcome, subcat, and item. --}}
    {{-- I display the main categories is this welcome blade view. Those categories with id = 1, 3, or 6 --}}
    {{-- have subcategories to display and use the subcat blade view. All others have only items to display using the item blade view. --}}
    {{-- I used the variable $content to retrieve the data on all views. --}}
    {{-- I used an anchor tag set an href to point to the appropriate link. --}}

            <div class='col-sm-4'>
                <p><img class="img-responsive" src="/img/{{ $content->img }}" title="{{ $content->img }}"/></p>
                @if ($content->id == 1 or $content->id == 3 or $content->id == 6)
                    <h4><a href="/subcat/{{ $content->id }}">{{ $content->title }}</a></h4>
                @else
                    <h4><a href="/item/{{ $content->id }}">{{ $content->title }}</a></h4>
                @endif
            </div>
        </div>
    @endforeach

@endsection
{{--<p>{{ $content->id }}</p>--}}
{{--<p>{{ $content->type }}</p>--}}
{{--<p>'cat_id: ' {{ $content->cat_id }}</p>--}}
{{--<p>'subcat_id: ' {{ $content->subcat_id }}</p>--}}
{{--<p><a href='{{ $content->link }}', target="_blank">Hairy Lipsum</a></p>--}}
{{--<h4><a href="{{ action('DatabaseController@subcat', ['cat_id' => $content->id]) }}">{{ $content->title }}</a></h4>--}}
{{--                    <h4><a href="{{ action('DatabaseController@item', ['cat_id' => $content->id]) }}">{{ $content->title }}</a></h4>--}}
{{--$contents=DB::table('menu')->where('id', '1')->get();--}}
{{--            <a href="{{ URL::route('custom_paint') }}#id">LINK</a>--}}

{{--$url = route('subcat');--}}