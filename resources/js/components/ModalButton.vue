<template>
    <button
        type="button"
        data-toggle="modal"
        @click="click(data)"
        class="btn btn-primary btn-sm"
        data-target="#exampleModal">
        View Row {{ data.id }} Modal
    </button>
</template>

<script>
    export default {
        name: "ModalButton",
        props: {
            data: {},
            name: {},
            click: {},
            meta: {},
            classes: {},
        },
    }
</script>

<style scoped>

</style>
