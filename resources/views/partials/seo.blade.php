@if (isset($page) && $page)
    <title> {{$page->getSeoTitle()}}</title>
    <meta name="description" content="{{$page->getSeoDescription()}}" />
    <meta property="og:title" content="{{$page->getSeoTitle()}}"/>
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->current()}}" />
    <meta property="og:description" content="{{$page->getSeoDescription()}}"/>
    <meta property="og:image" content="{{ asset(setting('seo-izobrazhenie')) }}"/>
@endif
