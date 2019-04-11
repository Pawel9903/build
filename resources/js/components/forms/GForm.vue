<template>
    <form :method="method" :action="action" @submit.prevent="onSubmit" ></form>
</template>

<script>
    import Form from "oct-vue-form"

    export default {
        name: "global-form",
        props:{
            action: {
                type: String,
                required: true
            },
            form:{
                type: Object,

            },
            method: {
                type: String,
                required: false,
                default: 'post'
            },
        },
        methods: {
            onSubmit() {
                this.form.submit( this.method, this.endpoint )
                    .then( console.log( "Finished!" ) )
                    .catch( console.error( "Fix them errors!" ) );
            },
        },
        created() {
            this.form = gt
        }
    }
</script>

<style scoped>

</style>