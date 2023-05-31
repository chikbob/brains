<template>
    <div>
        {{ order }}
    </div>
</template>

<script setup>
defineProps({
    order: {
        type: Object,
        required: false
    }
})
</script>

<style scoped>

</style>
