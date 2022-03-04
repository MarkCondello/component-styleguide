@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Vue Date Pickers</h3>
        <p>We have created a wrapper for the Vue 2 Datepicker which has a hidden input to help with sending form submissions in blades. More details about the package can be found <a href="https://github.com/mengxiong10/vue2-datepicker" target="blank">here</a>.</p>
        <hr>
        <h3>HTML Demo</h3>
        <datepicker-wrapper value="{{ Carbon\Carbon::now()->addDays(7)->format('d/m/Y') }}" :is-form-input="true" name="expected_date"></datepicker-wrapper>
        <datepicker-wrapper :value="{{ json_encode([Carbon\Carbon::now()->format('d/m/Y'), Carbon\Carbon::now()->addDays(7)->format('d/m/Y')]) }}" :is-range="true" :is-form-input="true" name="expected_delivery"></datepicker-wrapper>
        <div class="demo">
            <v-date-picker name="due_date" value="{{ Carbon\Carbon::now() }}"></v-date-picker>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block code-content='<v-date-picker name="due_date" value="\{\{ Carbon\Carbon::now() \}\}"></v-date-picker>'></code-block>
    </div>
@endsection

