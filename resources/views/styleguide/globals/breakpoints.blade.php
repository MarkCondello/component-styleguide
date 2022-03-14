@extends('layouts.styleguide')

@section('content')
<div >
    <h3>About breakpoints</h3>
    <p>A breakpoints map is available for media queries to be included. See below:</p>
    <p>These breakpoint settings can be modified to suit the needs of a designed layout.</p>
    <hr>
    <h3>Demo</h3>
    <code-block 
        code-content='$breakpoints: (
    xs: 350px,
    sm: 480px,
    md: 764px,
    lg: 1024px,
    xl: 1400px,
) !default;"'></code-block>
    <hr>
    <h3>Breakpoint @mixins</h3>
    <p>Included in the sass-lip npm package, is the breakpoints.scss file which needs to be @used in order to use its mixins:</p>
    <code-block code-content="@use 'dcode/sass-lib/sass/breakpoints.scss' as *;"></code-block>
    <p>There are various mixins which can be used based on these breakpoint settings. The most commonly used mixins are below:</p>
    <code-block code-content="@mixin media-breakpoint-up('md', $breakpoints);
@mixin media-breakpoint-down('lg', $breakpoints);
@mixin media-breakpoint-only('sm', $breakpoints);"></code-block>
</div>
@endsection