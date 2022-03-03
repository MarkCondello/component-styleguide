@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Checkbox Toggles</h3>
        <p></p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <label for="option_one" class="checkbox-toggle">
                    <span class="label-text">Option 1</span>
                    <input id="option_one"
                        type="checkbox"> 
                    <span class="checkbox"></span>
                </label>
                <label for="option_two" class="checkbox-toggle">
                    <span class="label-text">Option 2</span>
                    <input id="option_two"
                        type="checkbox"> 
                        <span class="checkbox"></span>
                </label>
                <label for="option_three" class="checkbox-toggle">
                    <span class="label-text">Option 3</span>
                    <input id="option_three"
                        type="checkbox"> 
                        <span class="checkbox"></span>
                </label>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block 
            code-content='<form action="#" method="post">
    <label for="option_one" class="checkbox-toggle">
        <span class="label-text">Option 1</span>
        <input id="option_one"
            type="checkbox"> 
        <span class="checkbox"></span>
    </label>
    <label for="option_two" class="checkbox-toggle">
        <span class="label-text">Option 2</span>
        <input id="option_two"
            type="checkbox"> 
            <span class="checkbox"></span>
    </label>
    <label for="option_three" class="checkbox-toggle">
        <span class="label-text">Option 3</span>
        <input id="option_three"
            type="checkbox"> 
            <span class="checkbox"></span>
    </label>
</form>'></code-block>
    </div>
@endsection

