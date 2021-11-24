<!-- Place this data between the <head> tags of your website -->
    <meta name="title" content="{{$article->title}}"/>
    <meta name="description" content="{{$article->description}}" />
    <meta name="news_keywords" content="{{$article->description}}" />
    <meta name="geo.country" content="{{App::getLocale() }}" />
    <meta http-equiv="content-language" content="{{App::getLocale() }}" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="copyright" content="{{url()->full()}}">
    <meta name="creation date" content="2021">
    <meta name="keywords" content="ndpe, Auriga Nusantara, ndpe performance, NDPE Transparency Platform, ndpe indonesia, {{$article->tags}}">
    <link rel="canonical" href="{{url()->full()}}"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="NDPE Transparency Platform">
    <meta name="googlebot-news" content="index, follow, follow" />
    <meta name="googlebot" content="index, follow, follow" />
    <meta name="coverage" content="NDPE Transparency Platform" >

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AURIGA_ID">
    <meta name="twitter:title" content="{{$title}}">
    <meta name="twitter:description" content="{{$article->description }}">
    <meta name="twitter:creator" content="@AURIGA_ID">
    <meta name="twitter:url" content="{{url()->full()}}" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="{{ asset('/storage/thumbnail/'.$article->img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->full()}}" />
    <!-- Facebook image must be at least 600x315px -->
    <meta property="og:image" content="{{ asset('/storage/thumbnail/'.$article->img) }}" />
    <meta property="og:description" content="{{$article->description }}" />
    <meta property="og:site_name" content="{{$title}}" />
    <meta property="article:tag" content="ndpe, Auriga Nusantara, ndpe performance, NDPE Transparency Platform, ndpe indonesia, {{$article->tags }}" />
