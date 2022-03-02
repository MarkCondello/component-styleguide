@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Checkbox Button Groups</h3>
        <p>A container div with the class of <code>btn-group</code> and a group of checkbox buttons will generate the button group styling.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <div class="btn-group">
                    <label for="option-one" class="checkbox-btn">
                        <input type="checkbox" id="option-one" />
                        <span>Option 1</span>
                    </label>
                    <label for="option-two" class="checkbox-btn">
                        <input type="checkbox" id="option-two" />
                        <span>Option 2</span>
                    </label>
                    <label for="option-three" class="checkbox-btn">
                        <input type="checkbox" id="option-three" />
                        <span>Option 3</span>
                    </label>
                </div>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block 
            code-content='<form action="#" method="post">
    <div class="btn-group">
        <label for="option-one" class="checkbox-btn">
            <input type="checkbox" id="option-one" />
            <span>Option 1</span>
        </label>
        <label for="option-two" class="checkbox-btn">
            <input type="checkbox" id="option-two" />
            <span>Option 2</span>
        </label>
        <label for="option-three" class="checkbox-btn">
            <input type="checkbox" id="option-three" />
            <span>Option 3</span>
        </label>
    </div>
</form>
'></code-block>
    </div>
@endsection

{{-- Extra features to include can be seen in the example here: https://www.lightningdesignsystem.com/components/checkbox-button-group/ --}}