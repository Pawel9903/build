<template>
    <label>
        {{ label }}
        <input :type="type" :value="value">
    </label>
</template>

<script>
    export default {
        name: "form-input",
        props:{
            value: {
              type: [String, Number],
              required: true
            },
            type: {
                type: String,
                required: true
            },
            label: {
                type: String,
                required: false,
                default: ''
            }
        }
    }
</script>

<style scoped>

</style>