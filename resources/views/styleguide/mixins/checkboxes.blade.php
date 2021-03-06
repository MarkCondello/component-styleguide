@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Generic Checkboxes</h3>
        <p></p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <form action="#" method="post">
                <label for="mail-me" class="checkbox">
                    <input type="checkbox" id="mail-me" />
                    <span>Include marketing</span>
                </label>
            </form>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block 
        code-content='<form action="#" method="post">
    <label for="mail-me" class="checkbox">
        <input type="checkbox" id="mail-me" />
        <span>Include marketing</span>
    </label>
</form>'></code-block>
    </div>
@endsection