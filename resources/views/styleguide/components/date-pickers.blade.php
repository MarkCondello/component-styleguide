@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Vue Date Pickers</h3>
        <p>We have created a wrapper for the Vue 2 Datepicker which has a hidden input to help with sending form submissions in blades. More details about the package can be found <a href="https://github.com/mengxiong10/vue2-datepicker" target="blank">here</a>.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <v-date-picker name="due_date" value="{{ Carbon\Carbon::now() }}"></v-date-picker>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block code-content='<v-date-picker name="due_date" value="\{\{ Carbon\Carbon::now() \}\}"></v-date-picker>'></code-block>
    </div>
@endsection
