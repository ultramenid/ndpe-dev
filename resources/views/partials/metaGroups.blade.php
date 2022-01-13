<!-- Place this data between the <head> tags of your website -->
    <meta name="title" content="{{$detail->name}}"/>
    <meta name="description" content="{{$detail->description}}" />
    <meta name="news_keywords" content="{{$detail->description}}" />
    <meta name="geo.country" content="{{App::getLocale() }}" />
    <meta http-equiv="content-language" content="{{App::getLocale() }}" />
    <meta name="geo.placename" content="Indonesia" />
    <meta name="copyright" content="{{url()->full()}}">
    <meta name="creation date" content="2021">
    <meta name="keywords" content="ndpe, Auriga Nusantara, ndpe performance, NDPE Transparency Platform, ndpe indonesia, {{$detail->name}}">
    <link rel="canonical" href="{{url()->full()}}"/>
    <meta name="robots" content="index, follow">
    <meta name="author" content="NDPE Transparency Platform">
    <meta name="googlebot-news" content="index, follow, follow" />
    <meta name="googlebot" content="index, follow, follow" />
    <meta name="coverage" content="NDPE Transparency Platform" >

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@AURIGA_ID">
    <meta name="twitter:title" content="{{$detail->name}}">
    <meta name="twitter:description" content="{{$detail->description }}">
    <meta name="twitter:creator" content="@AURIGA_ID">
    <meta name="twitter:url" content="{{url()->full()}}" />
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image"  content="{{ asset('/storage/thumbnail/'.$detail->img) }}">

    <!-- Open Graph data -->
    <meta property="og:title" content="{{$title}}" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="{{url()->full()}}" />
    <!-- Facebook image must be at least 600x315px -->
    <meta property="og:image" content="{{ asset('/storage/thumbnail/'.$detail->img) }}" />
    <meta property="og:description" content="{{$detail->description }}" />
    <meta property="og:site_name" content="{{$detail->name}}" />
    <meta property="article:tag" content="ndpe, Auriga Nusantara, ndpe performance, NDPE Transparency Platform, ndpe indonesia, {{$detail->name }}" />
