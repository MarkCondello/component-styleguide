@extends('layouts.styleguide')

@section('content')
<div >
    <h3>Flex columns</h3>
    <p>A helper mixin for generating the flex columns is available called <code>flex-cols($columns, $breakpoints);</code></p>
    <code-block code-content='@/use "dcode/sass-lib/sass/layouts.scss" as *;
@\use "~/sass/config/variables.scss"as *;

body {
    @/include flex-cols($columns, $breakpoints);
}
'></code-block>
    <p>By defining the columns and breakpoints in a $columns and $breakpoints map respectively, we can create flex layouts with predefined column amounts.</p>
    <p>The map's key values, match up with the <a href="{{ route('styleguide.globals.breakpoints') }}">breakpoints map</a> and define the number of columns for those breakpoints.</p>
    <p>in the example above, these maps below are included in the variables.scss file.</p>
    <code-block 
    code-content='$columns: (
    xs: (
        columns: 2,
        gutter: 16,
    ),
    sm: (
        columns: 6,
        gutter: 12,
    ),
    md: (
        columns: 12,
        gutter: 8,
    ),
    lg: (
        columns: 12,
        gutter: 8,
    ),
    xl: (
        columns: 12,
        gutter: 8,
    )
) !default;

$breakpoints: (
    xs: 350px,
    sm: 480px,
    md: 764px,
    lg: 1024px,
    xl: 1400px,
  ) !default;
'></code-block>

    <hr>
    <h3>Demo</h3>
    <p>The below demo is a xl 12 column flex column layout with a <code>.justify-between</code> css class included.</p>
    <div class="demo">
        <div class="flex-cols justify-between">
            <div class="xl-4 lg-4">XLarge 4</div>
            <div class="xl-2">XLarge 2</div>
            <div class="xl-3">XLarge 3</div>
            <div class="xl-1">XLarge 1</div>
            <div class="xl-5 ">XLarge 5</div>
            <div class="xl-6 ">XLarge 6</div>
         </div>
    </div>
    <hr>
    <h3>Flex col's margins & padding</h3>
    <p>Each child element of a has padding and margin class helpers named <code>.padd</code> and <code>.mrg</code></p>
    <p>These classes will add a left and right padding or margin value based on the gutter settings defined in the $columns map seen above.</p>
    <hr>
    <h3>Demo</h3>
    <p>The below demo has both the <code>.padd</code> and the<code>.mrg</code> css classes included.</p>
    <div class="demo">
        <div class="flex-cols">
            <div class="xl-4 padd mrg">XLarge 4</div>
            <div class="xl-2 padd mrg">XLarge 2</div>
            <div class="xl-2 padd mrg">XLarge 2</div>
            <div class="xl-3 padd mrg">XLarge 3</div>
            <div class="xl-1 padd mrg">XLarge 1</div>
            <div class="xl-5 padd mrg">XLarge 5</div>
            <div class="xl-6 padd mrg">XLarge 6</div>
         </div>
    </div>
     <hr>
    <h3>Flex-cols helpers</h3>
    <p>When using the flex-cols() mixin, a list of flex css class helpers are included. These are listed below:</p>
    <code-block 
    code-content='.justify-between {
    justify-content: space-between;
}
.justify-start {
    justify-content: flex-start;
}
.justify-end {
    justify-content: flex-end;
}
.align-center {
    align-content: center;
}
.align-top {
    align-content: flex-start;
}
.align-bottom {
    align-content: flex-end;
}
.no-wrap {
    flex-wrap: nowrap;
}'></code-block>
    
 
   
 </div>

@endsection
