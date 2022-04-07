@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Vue Datepicker</h3>
        <p>The Vue Datepicker is to be used with Carbon ISO date format values.</p>
        <p>We have created a wrapper for the Vue 2 Datepicker which includes a hidden input to send Y-m-d date values with form submissions in blades.</p>
        <p>More details about the Vue2 Datepicker package can be found <a href="https://github.com/mengxiong10/vue2-datepicker" target="blank">here</a>.</p>
        <p>The wrapper package github repo which Dcode maintains can be found <a href="https://github.com/DCODE-GROUP/vue-datepicker" target="_blank">here</a>.</p>
        <hr>
        <h3>Demo</h3>
        <small>Single date</small>
        <div class="demo">
          <datepicker-wrapper :value="{{ json_encode(Carbon\Carbon::now()) }}" :is-form-input="true" :is-clearable="false"></datepicker-wrapper>
        </div> 
        <small>Date range</small>
        <div class="demo">
            <datepicker-wrapper :value="{{ json_encode([Carbon\Carbon::now(), Carbon\Carbon::now()->addDays(7)]) }}" :is-range="true" :is-form-input="true" name="expected_delivery_range"></datepicker-wrapper>
        </div>
        <hr>
        <h3>Code Example</h3>
        <small>example.blade.php</small>
        <code-block code-content='<datepicker-wrapper 
    :\value="{{ json_encode([Carbon\Carbon::now(), Carbon\Carbon::now()->addDays(7)]) }}" 
    :\is-range="true"
    :\is-form-input="true"
    name="expected_delivery"
    >
</datepicker-wrapper>'></code-block>
        <hr>
        <h3>Expected data format</h3>
        <p>The date format for the date picker is the standard Carbon date ISO format: Y-m-d'.</p>
        <small>single date items</small>
        <code-block code-content='{{ json_encode(Carbon\Carbon::now()) }}'></code-block>
        <small>date ranges</small>
        <code-block code-content='{{ json_encode([Carbon\Carbon::now(), Carbon\Carbon::now()->addDays(7)]) }}'></code-block>
        <hr>
        <h3>Returned date format</h3>
        <p>The date format returned for the hidden input used for PHP forms is Y-m-d.</p>
        <small>single date items</small>
        <code-block code-content='2022-03-05'></code-block>
        <small>date ranges</small>
        <code-block code-content='2022-03-05,2022-03-12'></code-block>
        <p>With Vue implemenatations, the emitted input event will return a formatted date payload.</p>
        <small>single date items</small>
        <code-block code-content='[{
  "formattedDate":"2022-02-28",
  "name":"date",
  "date":["28/02/2022","19/03/2022"]
}]'></code-block>
        <small>date ranges</small>
        <code-block code-content='[{
  "formattedDate":["2022-02-28","2022-03-19"],
  "name":"date",
  "date":["28/02/2022","19/03/2022"]
}]'></code-block>
        <hr>
        <h3>Configuration options</h3>
        <table>
          <thead>
            <tr>
              <th>Option</th>
              <th width="180">Values</th>
              <th>Comment</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>isFormInput</td>
              <td>Boolean (default: false)</td>
              <td>Used for PHP forms by including a hidden input with the formatted ISO date value.</td>
            </tr>
            <tr>
              <td>name</td>
              <td>String</td>
              <td>This prop adds the name attribute to the hidden input for PHP forms. It also is used for a ref to the input.</td>
            </tr>
            <tr>
              <td>value</td>
              <td>String | Array</td>
              <td>If a date range is being set, an array is used otherwise a string.</td>
            </tr>
            <tr>
              <td>isRange</td>
              <td>Boolean (default: false)</td>
              <td>Set to true if datepicker is used to set date ranges.</td>
            </tr>
            <tr>
              <td>isClearable</td>
              <td>Boolean (default: true)</td>
              <td>Sets whether the datepicker can be cleared to null values.</td>
            </tr>
            <tr>
              <td>isDisabled</td>
              <td>Boolean (default: false)</td>
              <td>Sets the datepicker attribute to disabled.</td>
            </tr>
            <tr>
              <td>placeholder</td>
              <td>String (default: null)</td>
              <td>Sets the datepicker placeholder text.</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h3>CSS settings</h3>
        <p>The vue2-datepicker package has its own stylesheet. The below are the standard settings included.</p>
        <code-block code-content='@\use "../../config/palette.scss" as *;
@\use "../../config/variables.scss" as *;
@\use "dcode/sass-lib/sass/admin-features/mixins/forms.scss"as *;

$\default-color: map-get($palette, "blackest");
$\primary-color: map-get($palette, "primary");

@\import "~vue2-datepicker/scss/index.scss";

div.mx-datepicker {
    width: 100%;
    .mx-input-wrapper {
        .mx-input {
            @\include input-common($input-border, $input-radius, $input-padding, $placeholder-color);
            box-shadow: none;
            color: map-get($palette, "blackest");
            height: auto;
            line-height: 1;
        }
    }
}'
        
></code-block>
    </div>
@endsection

@section('contentLinks')
    <ul>
      <li><button>Datepicker</button>
        <ul>
          <li><a href="#">--</a></li>
        </ul>
      </li>
    </ul>
@endsection

