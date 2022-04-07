<template>
    <section>
        <header>
            <h2 v-html="header" />
        </header>
        <p v-text="content" />
        <footer>
            <button @click="handleConfirm" class="button success">Yes delete</button>
            <button @click="$emit('closeModal')" class="button -hollow">Cancel</button>
        </footer>
    </section>
</template>
<script>
export default {
    props: ['header', 'content'],
    data() {
        return {
            foo: 'bazz'
        }
    },
    methods: {
        handleConfirm (){
            this.$emit('confirm', {foo: this.foo})
        }
    }
}
</script>
