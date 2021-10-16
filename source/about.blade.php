@extends('_layouts.master')

@section('title', 'About Dev')

@section('content')
    <h1>About Dev</h1>

    <p>My name is {{ $page->owner->name }}. I built this site with gatsby template by Ranie Santos. I am not affiliated with "Behind The Classes" team! If You're from Behind the classes team please directly contact me at contact@abusayed.dev or contact@behindtheclasses.com </p>
    <p> If you wanna claim this domain copyright you have to be 'legal copyright owner' of 'Behind the Classes' Or, you can negotiate with me directly @lrsayed_bot (Telegram) </p>
    <h2>Links:</h2>

    <ul>
        <li><a href="/twitter" target="_blank">Twitter</a></li>
        <li><a href="/github" target="_blank">GitHub</a></li>
        <li><a href="https://abusayed.dev">Website</a></li> 
    </ul>
@endsection
