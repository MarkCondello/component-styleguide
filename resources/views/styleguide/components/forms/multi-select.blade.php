@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Search Mult Selects</h3>
        <p>We have created a wrapper for the VueMultiselect. More details about the vue-multiselect package can be found <a href="https://vue-multiselect.js.org/" target="blank">here</a>.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <multiselect-wrapper :value="{{ json_encode((object)[
                "userId" => 1, "id"=>3,"title"=>"fugiat veniam minus","completed"=>false,
            ])
            }}" search-url="https://jsonplaceholder.typicode.com/todos" label="title" :is-taggable="true" is-multiple="true"></multiselect-wrapper>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block code-content='<multiselect-wrapper search-url="https://jsonplaceholder.typicode.com/todos" label="title" is-taggable="true" is-multiple="true"></multiselect-wrapper>'></code-block>
        <hr>
        <h3>Configuration Options</h3>
        <p>All select options are API generated and additional feature for creating options with the isTaggable props is available along with a createUrl prop. </p>
        <p>This component takes a required searchUrl prop which is an endpoint to a resource which returns a JSON array of objects. The optional label prop will set the option content and must corresponds to a key value from the JSON array items return from the searchUrl.</p>

        <p>Below is the multi select wrapper code.</p>
        {{-- Needs hidden inputs for php implementation --}}
        <code-block code-content='<template>
    <div class="multi-select-wrapper">
        <multiselect
            v-model="input"
            :\options="options"
            :\disabled="disabled"
            :\track-by="trackBy"
            :\label="label"
            :\close-on-select="!isMultiple"
            :\show-labels="isMultiple"
            :\multiple="isMultiple"
            :\loading="loading"
            :\taggable="isTaggable"
            :\tag-position="tagPosition"
            :\placeholder="placeholder"
            @\tag="create"
            @\search-change="search"
            @\input="$emit("input", input)"
        />
    </div>
</template>
<script>
    import axios from "axios";
    import Multiselect from "vue-multiselect";
    import _ from "underscore";
    export default {
    name: "VSelect",
    components: {
        multiselect: Multiselect,
    },
    props: {
        searchUrl: {
        type: String,
        required: true,
        },
        name: {
            type: String,
          },
          value: {
            default: null,
            required: false,
          },
          placeholder: {
            type: String,
            default: null,
          },
          disabled: {
            type: Boolean,
            default: false,
          },
          trackBy: {
            type: String,
            default: "id",
          },
          tagPosition: {
            type: String,
            default: "bottom",
          },
          label: {
            type: String,
            default: "label",
          },
          getUrl: {
            type: String,
            default: null,
          },
          createUrl: {
            type: String,
            required: false,
          },
      
          isMultiple: {
            type: Boolean,
            default: false,
          },
          isTaggable: {
            type: Boolean,
            default: false,
          },
          isFormInput: {
            type: Boolean,
            default: false,
          },
          clearOnEventName: {
            type: String,
            required: false,
          },
        },
        data() {
          return {
            input: [],
            options: [],
            loading: false,
          };
        },
        created() {
          this.search("", () => {
            if (this.value) {
              let values = this.value;
              if (typeof values === "string") {
                values = JSON.parse(values);
              }
              if (!Array.isArray(values)) {
                values = [values];
              }
              for (let value of values) {
                if (this.options.some(option => option === value) === false) {
                  this.options.push(value);
                }
                this.input.push(value);
              }
            }
          });
          this.search = _.debounce(this.search, 200);
          if (this.clearOnEventName) {
            this.eventBus.$on(this.clearOnEventName, () => (this.input = null));
          }
        },
        methods: {
          async get(id) {
            if (this.getUrl && id) {
              this.loading = true;
              await axios
                .get(this.getUrl, {
                  params: {
                    id: id,
                  },
                })
                .then(response => {
                  let data = response.data.data;
                  this.input.push(data);
                  this.$emit("get", data);
                })
                .catch(console.error)
                .finally(() => {
                  this.loading = false;
                });
            }
          },
          async create(newOption) {
            if (this.createUrl) {
              this.loading = true;
              console.log({ newOption }, this.createUrl)
              await axios
                .post(this.createUrl, {
                  name: newOption,
                })
                .then(response => {
                  let value = response.data;
                  this.options.push(value);
                  if (this.isMultiple) {
                    this.input.push(value);
                  } else {
                    this.input = value;
                  }
                })
                .catch(console.error)
                .finally(() => {
                  this.$emit("input", this.input)
                  this.loading = false;
                });
            }
          },
          async search(search = "", callback = null) {
            this.loading = true;
            await axios
              .get(this.searchUrl, {
                params: {
                  s: search,
                },
              })
              .then(response => {
                this.options = response.data;
                if (callback) {
                  callback(response);
                }
              })
              .catch(console.error)
              .finally(() => {
                this.loading = false;
              });
          },
        },
      };
      </script>
      
      <style src="vue-multiselect/dist/vue-multiselect.min.css"></style>'></code-block>

    </div>
@endsection

