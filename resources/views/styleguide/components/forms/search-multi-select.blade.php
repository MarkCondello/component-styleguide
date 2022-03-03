@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Search Mult Selects</h3>
        <p>We have created a wrapper for the VueMultiselect. More details about the package can be found <a href="https://vue-multiselect.js.org/" target="blank">here</a>.</p>
        <hr>
        <h3>HTML Demo</h3>
        <div class="demo">
            <multiselect-wrapper search-url="https://jsonplaceholder.typicode.com/todos" label="title" ></multiselect-wrapper>
        </div>
        <hr>
        <h3>Code Example</h3>
        <code-block code-content='<multiselect-wrapper search-url="https://jsonplaceholder.typicode.com/todos" label="title" ></multiselect-wrapper>'></code-block>
        <hr>
        <h3>Configuration Options</h3>
        <p>All select options are API generated and additional feature for creating options with the isTaggable props is available along with a createUrl prop. </p>
        <p>This component takes a required searchUrl prop which is an endpoint to a resource which returns a JSON array of objects. The optional label prop will set the option content and must corresponds to a key value from the JSON array items return from the searchUrl.</p>

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
    ...
</script>

<style src="vue-multiselect/dist/vue-multiselect.min.css"></style>
'></code-block>

    </div>
@endsection

