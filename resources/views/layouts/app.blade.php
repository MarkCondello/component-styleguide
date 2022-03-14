@extends('layouts.base')

@section('body')
@include('styleguide.menu')
<section>
    <header>
        @yield('header')
    </header>
    <main>
        @yield('content')
        @isset($slot)
            {{ $slot }}
        @endisset
    </main>
</section>
<modal></modal>
<side-panel></side-panel>
@endsection
