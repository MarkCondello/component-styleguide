@extends('layouts.base', ['bodyId' => 'styleguide'])

@section('body')
<header>
    <aside>
        <img src="{{ asset('/imgs/logos/dcode.svg') }}" alt="Dcode logo" width="35"/>
        <h1>Styleguide.<br>DcodeGroup</h1>
    </aside>
    <div>
        {{-- ToDo: Add top menu and global serach --}}
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
    <aside>
        <ul>
            <li>
                <button>Globals</button>
                <ul>
                    <li>
                        <a href="{{ route('styleguide.globals.buttons') }}" @if(request()->is('globals/buttons')) class="active" @endif>Buttons</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.globals.colours') }}" @if(request()->is('globals/colours')) class="active" @endif>Colours</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.globals.typo') }}" @if(request()->is('globals/typography')) class="active" @endif>Typography</a>
                    </li>
                </ul>
            </li>
            <li>
                <button>Components</button>
                <ul>
                    <li>
                        <a href="{{ route('styleguide.components.alerts') }}" @if(request()->is('components/alerts')) class="active" @endif>Alerts</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.badges') }}" @if(request()->is('components/badges')) class="active" @endif>Badges</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.cards') }}" @if(request()->is('components/cards')) class="active" @endif>Cards</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms') }}" @if(request()->is('components/forms')) class="active" @endif>Forms</a> 
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.checkboxes') }}" @if(request()->is('components/forms/checkboxes')) class="active" @endif>Checkboxes</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.checkbox-btns') }}" @if(request()->is('components/forms/checkbox-buttons')) class="active" @endif>Checkbox Buttons</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.checkbox-toggles') }}" @if(request()->is('components/forms/checkbox-toggles')) class="active" @endif>Checkbox Toggles</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.checkbox-btn-groups') }}" @if(request()->is('components/forms/checkbox-button-groups')) class="active" @endif>Checkbox Button Groups</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.date-pickers') }}" @if(request()->is('components/forms/datepickers')) class="active" @endif>Date Pickers</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.search-inputs') }}" @if(request()->is('components/forms/search-inputs')) class="active" @endif>Search Inputs</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.select-filters') }}" @if(request()->is('components/forms/select-filters')) class="active" @endif>Select Filters</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.modals') }}" @if(request()->is('components/modals')) class="active" @endif>Modals</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.forms.multi-select') }}" @if(request()->is('components/multi-selects')) class="active" @endif>Multi Selects</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.navs') }}" @if(request()->is('components/navigation')) class="active" @endif>Navigation</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.tables') }}" @if(request()->is('components/tables')) class="active" @endif>Tables</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.tabs') }}" @if(request()->is('components/tabs')) class="active" @endif>Tabs</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.tags') }}" @if(request()->is('components/tags')) class="active" @endif>Tags</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.tiles') }}" @if(request()->is('components/tiles')) class="active" @endif>Tiles</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.components.side-panels') }}" @if(request()->is('components/side-panels')) class="active" @endif>Side Panels</a>
                    </li>
                </ul>
            </li>
            <li>
                <button>Layouts</button>
                <ul>
                    <li>
                        <a href="{{ route('styleguide.layouts.breakpoints') }}" @if(request()->is('layouts/breakpoints')) class="active" @endif>Breakpoints</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.layouts.flex') }}" @if(request()->is('layouts/flex')) class="active" @endif>Flex Columns</a>
                    </li>
                    <li>
                        <a href="{{ route('styleguide.layouts.grids') }}" @if(request()->is('layouts/grids')) class="active" @endif>CSS Grids</a>
                    </li>
                
                </ul>
            </li>  
            {{-- <li><a href="">Accessibility</a></li> --}}
        </ul>
    </aside>
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
