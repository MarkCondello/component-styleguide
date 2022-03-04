@extends('layouts.styleguide')

@section('content')
    <div>
        <h3>Vue Multiselect</h3>
        <p>The Vue Multiselect is to be used in places where there are database driven values in a select. Using this tool will ensure that results that can become large over time are managed efficiently. Functionality of this includes:<p>
        <ul>
          <li>Ability to limit results</li>
          <li>AJAX-based datasource</li>
          <li>Searchable data source</li>
          <li>Single or multi-select</li>
          <li>Formatted results</li>
          <li>Ability to create new value from the input</li>
        </ul>
        <p>We have created a wrapper for the Vue Multiselect. More details about the vue-multselect package can be found <a href="https://vue-multiselect.js.org/" target="blank">here</a>.</p>
        <p>The wrapper package github repo which Dcode maintains can be found <a href="https://github.com/DCODE-GROUP/vue-multiselect" target="_blank">here</a>.</p>
        <hr>
        <h3>Demo</h3>
        <small>.blade.php example</small>
        <div class="demo">
          <multiselect-wrapper
            search-url="https://jsonplaceholder.typicode.com/todos"
            label="title"
            :is-multiple="true"
            :is-form-input="true"
            name="input-field-name"
          >
          </multiselect-wrapper>
        </div>
        <hr>
        <h3>Code example</h3>
        <small>example.vue.js</small>
        <code-block code-content='<multiselect-wrapper
    :\value="severity"
    track-by="id"
    label="label"
    search-url="/meta/endpoint"
    :\is-multiple="false"
    :\is-taggable="false"
    @\input="val => form.severity = val" // required for receiving updated input from vue-multiselect
/>'></code-block>
        <small>example.blade.php</small>
        <code-block code-content='<multiselect-wrapper
  :\value=" json_parse($severity)"
  track-by="id"
  label="label"
  search-url="/meta/endpoint"
  :\is-multiple="true"
  :\is-taggable="false"
  :\is-form-input="true" // required for form inputs
  name="severity" // required for form inputs
></multiselect-wrapper >
'></code-block>
        <hr>
        <h3>Expected data format</h3>
{{-- <p>A JSON array of objects with an id, and label prop field value like ('title', 'name') is required from the search endpoint.</p> --}}
        <code-block code-content='[
{
"id": 1,
"title": "delectus aut autem",
"completed": false
},
{
"id": 2,
"title": "quis ut nam facilis et officia qui",
"completed": false
},
...
'></code-block>
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
            <tr>
              <td>name</td>
              <td>String</td>
              <td>If the component is being used in a PHP form, the name prop sets the name to a hidden input field.</td>
            </tr>
            <tr>
              <td>value</td>
              <td>String | Array | Object</td>
              <td>The value type passed into the component depends on what is expected to be returned eg(and object, and id or an array ) and if the component is set to multiple (array).</td>
            </tr>
            <tr>
              <td>placeholder</td>
              <td>String</td>
              <td>The placeholder text.</td>
            </tr>
            <tr>
              <td>disabled</td>
              <td>Boolean</td>
              <td>Sets the disabled status.</td>
            </tr>
            <tr>
              <td>trackBy</td>
              <td>String (default: 'id')</td>
              <td>When working with objects, you must provide additional props: label and track-by. track-by is used to identify the option within the options list thus it’s value has to be unique. In this example the name property is unique across all options, so it can be used as track-by value.</td>
            </tr>
            <tr>
              <td>tagPosition</td>
              <td>String (default: 'bottom')</td>
              <td>By default the tag position will be set to 'bottom' and new tags will appear below the search results. Changing the tag positon to 'top' will revert this behaviour and will add the tags above the search.</td>
            </tr>
            <tr>
              <td>label</td>
              <td>String (default: 'label')</td>
              <td>The label prop will set the option text content and must corresponds to a key value from the JSON array items from the searchUrl. See code block example above where in that scenario the title key would be used.</td>
            </tr>
            <tr>
              <td>createUrl</td>
              <td>String</td>
              <td>A post endpoint for creating new instances. The isTaggable prop must be set to true to create new options.</td>
            </tr>
            <tr>
              <td>isMultiple</td>
              <td>Boolean (default:false)</td>
              <td>To allow multiple selections pass the :\isMultiple="true" prop.
              </td>
            </tr>
            <tr>
              <td>isTaggable</td>
              <td>Boolean (default:false)</td>
              <td>To add tagging functionality to single/multiple selects, set the :taggable prop to true. This will add an additional option at the beginning of the options list whenever you type a phrase that doesn’t have an exact match in the available options. Selecting this temporary option will emit the @\tag event which runs the create method with the associated createUrl. The event handler should add the received tag to both the options list and the value.
              </td>
            </tr>
            <tr>
              <td>isFormInput</td>
              <td>Boolean (default:false)</td>
              <td>This prop is needed when applying the MultiselectWrapper in a PHP form and adds the values to a hidden field. The name prop must be included when this prop is true. See above for name details.
              </td>
            </tr>
            <tr>
              <td>clearOnEventName</td>
              <td>String</td>
              <td>By including an event name, when that method is emmitted to $root, the multiselect input value will be set to null.
              </td>
            </tr>
          </tbody>
        </table>
        <hr>
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

