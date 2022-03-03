@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Multiselects Wrapper</h3>
        <p>We have created a wrapper for the VueMultiselect. More details about the vue-multselect package can be found <a href="https://vue-multiselect.js.org/" target="blank">here</a>.</p>
        <p>The wrapper package github repo which Dcode maintains can be found <a href="https://github.com/DCODE-GROUP/vue-multiselect" target="_blank">here</a>.</p>
        <br>
        <h3>HTML Demo</h3>
        <div class="demo">
            <multiselect-wrapper search-url="https://jsonplaceholder.typicode.com/todos" label="title" :is-multiple="true"></multiselect-wrapper>
        </div>
        <h3>Code Example</h3>
        <code-block code-content='//example.vue.js
<multiselect-wrapper
    :\value="form.severity"
    track-by="id"
    label="label"
    search-url="/meta/endpoint"
    :\is-multiple="false"
    :\is-taggable="false"
    @\input="val => form.severity = val" // required for receiving updated input from vue-multiselect
/>'></code-block>
<code-block code-content='//example.blade.php
<multiselect-wrapper
  track-by="id"
  label="label"
  search-url="/meta/endpoint"
  :\is-multiple="true"
  :\is-taggable="false"
  :\is-form-input="true" // required for form inputs
  name="severity" // required for form inputs
></multiselect-wrapper >
'></code-block>   
        <h3>Configuration Options</h3>
        <p>All select options are API generated and additional feature for creating options with the isTaggable props is available along with a createUrl prop. </p>
        <p>This component takes a required searchUrl prop which is an endpoint to a resource which returns a JSON array of objects. The optional label prop will set the option content and must corresponds to a key value from the JSON array items return from the searchUrl.</p>
        <p>A create-url prop which takes a create endpoint is needed for creating new options in combination with the is-taggable boolean prop.</p>
        <br>
        <h3>CSS settings</h3>
        <p>Included in the wrapper is the css include for the vue-multiselect styles. No additional styles have been included in out preset.</p>
    </div>
@endsection

@section('contentLinks')
    <ul>
      <li><button>Search Multi Selects</button>
        <ul>
          <li><a href="#">--</a></li>
        </ul>
      </li>
    </ul>
@endsection

