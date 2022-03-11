@extends('layouts.styleguide')

@section('content')
<div >
    <h3>CSS Grids</h3>
    <p>Included in the sass-lib package are css grid helper mixins named grids() and cols-of().</p>
    <p>The demo below layout was generated using the following settings:</p>
    <code-block code-content='@/use "dcode/sass-lib/sass/layouts.scss" as *;
.six-by-three-grid {
    @\include grids(6, 1rem, 1rem, 3);
    > div {
        background-color: $dcode-turquoise;
        min-height: 100px;
        width: 100%;
    }
}    
'></code-block>
     <p>The mixin parameters for using the grids mixin are: <code>grids($cols: 1, $colGap : 0px,  $rowGap : 0px, $rows: 0)</code></p>
    <hr>
    <h3>Demo</h3>
    <div class="demo">
        <div class="six-by-three-grid">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <hr>
    <h3>About cols-of</h3>
    <p>A specific widths mixin is also available.</p>
    <p>The parameters for generating grids are here: <code>cols-of($colWidth, $colGap: 2rem, $max: 1fr, $bp: 400px)</code></p>
    <p>If a third $max parameter is included, the grid cell will not exceed that width. By default, the grid cell expands to fill up as much space available in the grid.</p>
    <p>If breakpoint parameter width is reached, the grids expand to full width.</p>
    <hr>
    <h3>Demo</h3>
    <div class="demo">
        <div class="cols-of-200">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <hr>
    <h3>Code Example</h3>
    <p>The demo above is generated using the following settings:</p>

    <code-block 
        code-content=".cols-of-200 {
    @\include cols-of(200px, 1rem, 1fr, 1000px);
    > div {
        background-color: \$dcode-turquoise;
        min-height: 100px;
        width: 100%;
    }
}"></code-block>

 </div>

@endsection
