<template>
    <div>
        <data-table
            :columns="columns"
            url="http://vote.co/api/v1/candidates">
        </data-table>
        <modal
            :row="selectedRow">
        </modal>
    </div>
</template>

<script>

    import Modal from './Modal';
    import ModalButton from "./ModalButton";
    export default {
        name: "candidates",
        components: {
            Modal,
            ModalButton,
        },
        data() {
            return {
                columns: [
                    {
                        label: 'ID',
                        name: 'id',
                        filterable: true,
                    },
                    {
                        label: 'Nombre',
                        name: 'name',
                        filterable: true,
                    },
                    {
                        label: 'Acciones',
                        name: '',
                        filterable: false,
                        component: ModalButton,
                        event: "click",
                        handler: this.updateSelectedModal,
                    },
                ],
                selectedRow: {},
            }
        },
        methods: {
            updateSelectedModal(data) {
                this.selectedRow = data;
                console.log(data);
            }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
