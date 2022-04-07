@extends('layouts.styleguide')

@section('content')
    <div >
        <h3>Vue Modals</h3>
        <p>A component for creating modals named <code>ModalWrapper</code> is available. This component takes a 'componentName', 'componentData' and 'callback' data items.</p>
        <p>The modal is opened when the 'openModal' emitted event is triggered. More details below:</p>
        <br>
        <small>ModalWrapper.vue</small>
        <code-block code-content='<template>
    <transition name="fade">
        <div class="modal-wrapper"
            v-if="isOpen && componentName"
            @\click="isOpen=false"
        >
            <div class="modal" @\click.stop>
                <button class="close" @\click="isOpen=false">x</button>
                <component
                    :\is="componentName"
                    v-bind="componentData"
                    @\confirm="handleConfirm"
                    @\closeModal="isOpen = false"
                ></component>
            </div>
        </div>
    </transition>
</template>
<script>
export default {
    data() {
        return {
            componentName: "",
            componentData: {},
            callback: null,
            isOpen: false,
        }
    },
    created() {
        this.$root.$on("openModal", (payload) => {
            this.isOpen = true
            if ("componentName" in payload) this.componentName = payload.componentName
            if ("componentData" in payload) this.componentData = payload.componentData
            this.callback = payload.callback
        });
        this.$root.$on("closeModal", () => {
            this.isOpen = false
        });
    },
    methods: {
        handleConfirm(data = null) {
            if(data){
                this.componentData = data
                this.$root.$emit("modalDataUpdated", data)
            }
            this.callback()
        }
    },
}
</script>'
></code-block>
    <p>This component as the name suggests, is a wrapper for other components to have their data injected into it.</p>
    <ol>
        <li>Firstly we need to pass in a registered component by name with 'componentName'. In the example below, we are injecting the 'DeleteModal' component.</li>
        <li>Secondly we need to bind any data that the injected component requires with the 'componentData' data item.</li>
        <li>Thirdly we need must include a function for the 'callback' data item. This function is used for when the injected component's 'confirm' event is run.</li>
    </ol>
    <p>The below code example shows how to inject a component with the three data items mentioned above.</p>
    <br>
    {{-- <h3>Code Example</h3> --}}
    <small>DeleteModalTrigger.vue</small>
    <code-block code-content='<template>
    <button type="submit"
        class="button -hollow"
        @\click.prevent="handleDelete"
    >Delete</button>
</template>
<script>
export default {
    name: "DeleteModalTrigger",
    methods: {
        handleDelete(){
            this.$root.$emit("openModal", {
                componentName: "DeleteModal",
                componentData: {
                    header: "Are you sure you want to delete this item?",
                    content: "This action can not be undone.",
                },
                callback: () => {
                    this.doAction()
                },
            });
        },
        doAction(){
            this.$root.$emit("closeModal");
            console.log("The delete action is now completed...")
            return true;
        }
    }
}
</script>'></code-block>
<p>The injected component must include a 'confirm' method which emits to the 'ModalWrapper' with any optional data that it needs to send back.</p>
<p>The 'ModalWrapper' in turn emits any data it receives to the root in an event name 'modalDataUpdated'.</p>
<p>ModalWrapper's handleConfirm() method will then run the callback method passed in (see line 18 of the above code example).</p>
<hr>
<p>See below for the injected component dynamically included in the ModalWrapper.</p>
<small>DeleteModal.vue</small>

<code-block code-content='<template>
    <section>
        <header>
            <h2 v-html="header" />
        </header>
        <p v-text="content" />
        <footer>
            <button @\click="handleConfirm" class="button success">Yes delete</button>
            <button @\click="$emit(closeModal)" class="button -hollow">Cancel</button>
        </footer>
    </section>
</template>
<script>
export default {
    props: ["header", "content"],
    data() {
        return {
            foo: "bazz"
        }
    },
    methods: {
        handleConfirm (){
            this.$emit("confirm", {foo: this.foo})
        }
    }
}
</script>'></code-block>
        <hr>

        <h3>Demo</h3>
        <div class="demo">
            <delete-modal-trigger></delete-modal-trigger>
        </div>

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
              <td>componentName</td>
              <td>String</td>
              <td>This is a reference to the component which is injected into the ModalWrapper.</td>
            </tr>
            <tr>
                <td>componentData</td>
                <td>Object</td>
                <td>Any data that the injected component requires is passed in through the componentData item.</td>
            </tr>
            <tr>
                <td>callback</td>
                <td>Function</td>
                <td>A function which is called when the confirm event is triggered.</td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h3>CSS settings</h3>
        <p>The vue2-datepicker package has its own stylesheet. The below are the standard settings included.</p>
        <code-block code-content='@\use "dcode/sass-lib/sass/admin-features/mixins/modals.scss" as *;
@\use "../../config/variables.scss" as *;

.modal-wrapper {
    @\include modal($window-bg, $modal-width, $modal-radius);
}'></code-block>
    </div>
@endsection