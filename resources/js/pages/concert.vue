<template>
    <PageLayout>
        <div :class="cnConcertScreen('concert')">
            <table cellspacing="0" cellpadding="0">
                <div :class="cnConcertScreen('concert-container')" v-for="concert in concerts">
                    <tr>
                        <th>
                            <div :class="cnConcertScreen('concert-container_text')">
                                {{ concert.name }}
                            </div>

                        </th>
                        <th>
                            <div :class="cnConcertScreen('concert-container_text')">
                                {{ concert.city }}
                            </div>
                        </th>
                        <th>
                            <div :class="cnConcertScreen('concert-container_text')">
                                {{ (concert.date).slice(0, -3) }}
                            </div>
                        </th>
                        <th>
                            <a :href="`/concert/${concert.id}`" :class="cnConcertScreen('concert-container_button')">
                                Check
                            </a>
                        </th>
                    </tr>
                </div>
            </table>
        </div>
    </PageLayout>
</template>

<script setup>
import PageLayout from '../shared/layouts/page-layout/page-layout.vue';
import { cnConcertScreen } from './concert-screen.const';
import { Link } from '@inertiajs/vue3'
const props = defineProps({
    concerts: {
        type: Object,
        required: true
    },
})
</script>

<style lang="scss" scoped>
.concert-screen__concert {
    display: flex;
    flex-direction: column;
    height: 100%;

    &-container {
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

        &_button {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            height: auto;

            display: flex;
            justify-content: center;
            align-items: center;
            margin: 10px auto;
            padding: 5px 10px;
            width: fit-content;

            color: #FFFFFF;
            background: #171717;
            text-decoration: none;


            &:hover {
                background: #3d3d3d;
            }
        }
    }

    th {
        width: 25%;
    }
}

/* width */
::-webkit-scrollbar {
    width: 10px;
}

/* Track */
::-webkit-scrollbar-track {
    background: #171717;
}

/* Handle */
::-webkit-scrollbar-thumb {
    background: #fff;
}
</style>