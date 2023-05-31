<template>
    <div>
        {{ $props }}
        <form @submit.prevent="submit">
            <input
                type="text"
                v-model="form.email"
                placeholder="email для покупки"
            >
            <button type="submit">
                Купить
            </button>
        </form>
    </div>
</template>

<script setup>
import {reactive} from "vue";
import {router} from '@inertiajs/vue3'

defineProps({
    concert: {
        type: Object,
        required: true
    },
    tickets: {
        type: Array,
        required: true
    }
});

const form = reactive({
    email: 'hui',
    ticket_id: 1
})

function submit() {
    router.post('/ticket', form)
}
</script>

<style scoped>

</style>
