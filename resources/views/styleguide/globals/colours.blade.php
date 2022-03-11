@extends('layouts.styleguide')

@section('content')
<div >
    <h3>Colours</h3>
    <p>Included in the sass-lip npm package is a $preset-palette of colours.</p>
    <p>By importing the helpers.scss file we can use the preset pallete or add our own to generate text and background colours woth the mixin provided.</p>
    <code-block code-content='@\use "dcode/sass-lib/sass/admin-features/helpers" as *;
@/include bg-text-colors($palette);'
></code-block>

    <p>The primary colour is used for interactive elements, such as links and buttons. The secondary, success, warning,
        and danger colours are used to give more context to UI elements and actions.</p>
    <p>This $palette map can also is used in various components like alerts, tags, tiles, table rows and badges.</p>
 <code-block code-content='$preset-palette: (
    primary: #1779ba,
    secondary: #767676,
    success: #3adb76,
    warning: #ffae00,
    danger: #cc4b37,
    whitest: #ffffff,
    light-gray: #e6e6e6,
    medium-gray: #cacaca,
    med-dark-gray: #aaa,
    dark-gray: #8a8a8a,
    blackest: #0a0a0a,
    off-white: #f8f8f8,
);'></code-block>
    <p>When including the bg-text-colors() mixin, all the colours within the map which is addded as a parameter are accesible with <code>.bg-COLOR</code> and <code>.text-COLOR</code> classes respectively.</p>
    <hr>
    <div class="demo">
        <div class="cols-of-150">
            <div class="colour-block">
                <div class="bg-primary"></div>
                <p class="text-primary">Primary</p>
            </div>
            <div class="colour-block">
                <div class="bg-secondary"></div>
                <p class="text-secondary">Secondary</p>
            </div>
            <div class="colour-block">
                <div class="bg-success"></div>
                <p class="text-success">Success</p>
            </div>
            <div class="colour-block">
                <div class="bg-warning"></div>
                <p class="text-warning">Warning</p>
            </div>
            <div class="colour-block">
                <div class="bg-danger"></div>
                <p class="text-danger">Danger</p>
            </div>
        </div>
        <hr>
        <div class="cols-of-150">
            <div class="colour-block">
                <div class="bg-medium-gray"></div>
                <p class="text-medium-gray">Medium Gray</p>
            </div>
            <div class="colour-block">
                <div class="bg-dark-gray"></div>
                <p class="text-dark-gray">Dark Gray</p>
            </div>
            <div class="colour-block">
                <div class="bg-blackest"></div>
                <p class="text-blackest">Black</p>
            </div>
            <div class="colour-block bg-dark-gray">
                <div class="bg-light-gray"></div>
                <p class="text-light-gray">Light Gray</p>
            </div>
            <div class="colour-block bg-dark-gray">
                <div class="bg-off-white"></div>
                <p class="text-off-white">Off White</p>
            </div>
            <div class="colour-block bg-blackest">
                <div class="bg-whitest"></div>
                <p class="text-whitest">White</p>
            </div>
        </div>
    </div>

    <code-block code-content='<div class="cols-of-150">
    <div class="colour-block">
        <div class="bg-primary"></div>
        <p class="text-primary">Primary</p>
    </div>
    <div class="colour-block">
        <div class="bg-secondary"></div>
        <p class="text-secondary">Secondary</p>
    </div>
    <div class="colour-block">
        <div class="bg-success"></div>
        <p class="text-success">Success</p>
    </div>
    <div class="colour-block">
        <div class="bg-warning"></div>
        <p class="text-warning">Warning</p>
    </div>
    <div class="colour-block">
        <div class="bg-danger"></div>
        <p class="text-danger">Danger</p>
    </div>
</div>'
></code-block>
</div>
@endsection
{{-- Look to the Foundation color settings for extra features to include: https://get.foundation/sites/docs/global.html --}}
