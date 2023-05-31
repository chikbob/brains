<template>
    <div>
        {{ ticket }}
    </div>
</template>

<script setup>
defineProps({
    ticket: {
        type: Object,
        required: true
    }
})
</script>

<style scoped>

</style>
