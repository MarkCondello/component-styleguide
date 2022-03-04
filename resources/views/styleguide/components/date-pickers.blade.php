@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Vue Date Pickers</h3>
        <p>We have created a wrapper for the Vue 2 Datepicker which has a hidden input to help with sending form submissions in blades. </p>
        <p>More details about the Vue2 Datepicker package can be found <a href="https://github.com/mengxiong10/vue2-datepicker" target="blank">here</a>.</p>
        <p>The wrapper package github repo which Dcode maintains can be found <a href="https://github.com/DCODE-GROUP/vue-datepicker" target="_blank">here</a>.</p>

        <hr>
        <h3>Demo</h3>
        <div class="demo">
            <datepicker-wrapper :value="{{ json_encode([Carbon\Carbon::now()->format('d/m/Y'), Carbon\Carbon::now()->addDays(7)->format('d/m/Y')]) }}" :is-range="true" :is-form-input="true" name="expected_delivery"></datepicker-wrapper>
        </div>
        <hr>
        <h3>Code Example</h3>
        <small>example.blade.php</small>
        <code-block code-content='<datepicker-wrapper 
    :\value="{{ json_encode([Carbon\Carbon::now()->format('d/m/Y'), Carbon\Carbon::now()->addDays(7)->format('d/m/Y')]) }}" 
    :\is-range="true"
    :\is-form-input="true"
    name="expected_delivery"
    >
</datepicker-wrapper>'></code-block>
        <hr>
        <h3>Expected data format</h3>
        <small>date items</small>
        <small>date ranges</small>
        <hr>
        <h3>Configuration options</h3>
        <table>
            <thead>
              <tr>
                <th>Option</th>
                <th width="180">Values</th>{{-- what type we need --}}
                <th>Comment</th>{{-- explanation for what it does, is required, what gets returned etc --}}
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>searchUrl</td>
                <td>String</td>
                <td>This component takes a required searchUrl prop which is an endpoint to a resource which returns a JSON array of objects. See above for the expected response format.</td>
              </tr>
            </tbody>
        </table>
    </div>
@endsection

