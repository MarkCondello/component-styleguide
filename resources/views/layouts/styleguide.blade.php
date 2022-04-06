@extends('layouts.base', ['bodyId' => 'styleguide'])

@section('body')
<header>
    <aside>
        <img src="{{ asset('/imgs/logos/logo.svg') }}" alt="Styleguide logo" width="30"/>
        <h1>Styleguide.<br>DcodeGroup</h1>
    </aside>
    <div>
        {{-- ToDo: Add top menu and global search --}}
        <menu>
            {{-- <ul>
                <li><a href="#">Top Nav Item</a></li>
                <li><a href="#">Top Nav Item</a></li>
                <li><a href="#">Top Nav Item</a></li>
                <li><a href="#">Top Nav Item</a></li>
            </ul> --}}
        </menu>
        <form></form>
    </div>
</header>
<main>
    @include('styleguide.menu')
    <section>
        <article>
        @yield('content')
        </article>
        <aside>
            @yield('contentLinks')
        </aside>
    </section>
</main>
 <modal></modal>
<side-panel></side-panel>
@endsection
