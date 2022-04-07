<template>
    <transition name="fade">
        <div class="modal-wrapper"
            v-if="isOpen && componentName"
            @click="isOpen=false"
        >
            <div class="modal" @click.stop>
                <button class="close" @click="isOpen=false">x</button>
                <component
                    :is="componentName"
                    v-bind="componentData"
                    @confirm="handleConfirm"
                    @closeModal="isOpen = false"
                ></component>
            </div>
        </div>
    </transition>
</template>
<script>
export default {
    data() {
        return {
            componentName: '',
            componentData: {},
            callback: null,
            isOpen: false,
        }
    },
    created() {
        this.$root.$on("openModal", (payload) => {
            this.isOpen = true
            this.componentName = payload.componentName
            this.componentData = payload.componentData
            this.callback = payload.callback
        });
        this.$root.$on("closeModal", () => {
            this.isOpen = false
        });
    },
    methods: {
        handleConfirm(data = null) {
            if(data){
                console.log('handleConfirm', {data})
                this.componentData = data
                this.$root.$emit('modalDataUpdated', data)
            }
            this.callback()
        }
    },
}
</script>