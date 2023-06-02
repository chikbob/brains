<template>
    <PageLayout>
        <div :class="cnConcertScreen('concert')">
            <table :class="cnConcertScreen('concert-info')">
                <tr>
                    <th>
                        <div :class="cnConcertScreen('concert-info_text')">
                            {{ props.concert.name }}
                        </div>
                    </th>
                    <th>
                        <div :class="cnConcertScreen('concert-info_text')">
                            {{ props.concert.city }}
                        </div>
                    </th>
                    <th>
                        <div :class="cnConcertScreen('concert-info_text')">
                            {{ (props.concert.date).slice(0, -3) }}
                        </div>
                    </th>
                </tr>
            </table>
            <div :class="cnConcertScreen('concert-ticket')">
                <div :class="cnConcertScreen('concert-ticket_block')">
                    <form :class="cnConcertScreen('concert-ticket_window')" @submit.prevent="submit()">
                        <div :class="cnConcertScreen('concert-ticket_text')">Enter your mail</div>
                        <input :class="cnConcertScreen('concert-ticket_input')" placeholder="Email" id="first_name"
                            v-model="form.email" />
                        <div v-if="form.errors?.email">
                            {{ form.errors.email }}
                        </div>
                        <select :class="cnConcertScreen('concert-ticket_select')" v-model="form.ticket_id">
                            <option v-for="ticket in tickets" :key="ticket.id" :value="ticket.id">
                                {{ ticket.title }}: {{ ticket.price }}$
                            </option>
                        </select>
                        <button :class="cnConcertScreen('concert-ticket_button')" type="submit">Reserve</button>
                    </form>
                </div>
            </div>
        </div>
    </PageLayout>
</template>

<script setup>
import { reactive } from "vue";
import { router } from '@inertiajs/vue3'
import PageLayout from "../../shared/layouts/page-layout/page-layout.vue";
import { cnConcertScreen } from '@/pages/concert-screen.const';

const props = defineProps({
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
    email: null,
    concert_id: props.concert.id,
    ticket_id: 1
})

function submit() {
    router.post('/order', form)
    console.log(form)
}
</script>

<style lang="scss" scoped>
.concert-screen__concert {
    height: 700px;

    &-ticket {
        display: flex;
        justify-content: center;
        align-items: center;

        margin-top: 130px;

        &_block {
            width: 500px;
            height: 300px;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        &_window {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        &_text {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            height: auto;

            display: flex;
            justify-content: center;
            align-items: center;
            margin: 40px auto;
            height: 60px;

            color: #000000;
        }

        &_input {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            height: auto;

            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 40px;
            height: 50px;
            width: 400px;

            background: #171717;
            color: #fff;
        }

        &_select {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            height: auto;

            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 40px;
            height: 50px;
            width: 410px;

            background: #171717;
            color: #fff;
        }

        &_button {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            height: auto;

            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 40px;
            height: 50px;
            width: 140px;

            background: #171717;
            color: #fff;
        }
    }

    &-info {
        display: table;

        width: 100%;
        align-items: center;

        background: rgba(45, 45, 45, 0.8);
        border-bottom: 2px rgba(255, 255, 255, 0.6) solid;

        &_text {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            height: auto;

            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto;
            height: 60px;

            color: #FFFFFF;
        }
    }
    th {
        width: 33%;
    }
}
</style>
