@extends('layouts.frontend')

@section('banner')
    @component('component.banner', ['list' => $banners])
    @endcomponent
@endsection
