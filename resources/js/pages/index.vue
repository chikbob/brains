<template>
    <PageLayout>
        <div :class="cnIndexScreen('tour')">
            <div :class="cnIndexScreen('tour-image')"><img src="@/assets/images/brainsband.png"></div>
        </div>
        <div :class="cnIndexScreen('group')">
            <div :class="cnIndexScreen('group-content')">GROUP</div>

            <div :class="cnIndexScreen('group-block')">
                <div :class="cnIndexScreen('group-block_image')">
                    <img src="@/assets/images/brainsband4.png">
                </div>
                <div :class="cnIndexScreen('group-block_text')">
                    Brains is Hungary's most successful concert band<br>playing electronic music: "The
                    extremely<br>successful
                    festival performances on the main<br>stage and their sold-out club concerts throughout<br>the country
                    confirm the group's place on the<br>domestic and international music palette".
                </div>
            </div>
        </div>

        <div :class="cnIndexScreen('music')">
            <div :class="cnIndexScreen('music-content')">MUSIC</div>

            <div :class="cnIndexScreen('music-vinil')">
                <img src="@/assets/images/vinil-rotare.png">
            </div>

            <div :class="cnIndexScreen('music-albums')">
                <div :class="cnIndexScreen('music-container-layout')">
                    <div v-for="album in props.albums" :class="cnIndexScreen('music-container-music')">
                        <div :class="cnIndexScreen('music-container-music_image')">
                            <img :src='`${album.poster}`'>
                        </div>
                        <div :class="cnIndexScreen('music-container-music_text')">
                            <div>{{ album.album }}</div>
                        </div>
                    </div>
                </div>
            </div>

            <div :class="cnIndexScreen('community')">
                <div :class="cnIndexScreen('community-content')">COMMUNITY</div>
            </div>

            <div :class="cnIndexScreen('community-polaroids')">
                <img src="@/assets/images/polaroids.png" alt="polaroids.png">
            </div>

            <div :class="cnIndexScreen('community-text')" class="justify-content margin-top">
                <div class="join-sn">Join our social networks!</div>
            </div>

            <div :class="cnIndexScreen('community-block')">
                <div :class="cnIndexScreen('community-block')">
                    <a href="https://www.facebook.com/BRAINSBAND" target="_blank"><img
                            src="@/assets/images/fb-black.png"></a>
                </div>
                <div :class="cnIndexScreen('community-block')">
                    <a href="https://www.instagram.com/brainsband/" target="_blank"><img
                            src="@/assets/images/instagram-black.png"></a>
                </div>
                <div :class="cnIndexScreen('community-block')">
                    <a href="https://music.apple.com/hu/artist/bráins/342669962" target="_blank"><img
                            src="@/assets/images/itunes-black.png"></a>
                </div>
                <div :class="cnIndexScreen('community-block')">
                    <a href="https://open.spotify.com/artist/2frn30cyNJHth8eZrxJa3X" target="_blank"><img
                            src="@/assets/images/spotify-black.png"></a>
                </div>
            </div>
        </div>

    </PageLayout>
</template>

<script setup>
import PageLayout from '@/shared/layouts/page-layout/page-layout.vue';
import { cnIndexScreen } from './index-screen.const';

const props = defineProps({
    albums: {
        type: Object,
        required: true
    }
})

console.log(props.albums)
</script>

<style lang="scss">
.index-screen__community {
    &-text {
        font-family: 'Vollkorn', serif;
        font-style: normal;
        font-weight: 700;
        font-size: 36px;
        line-height: 50px;

        color: #000000;

        margin-top: 70px;

        display: flex;
        width: 100%;
        justify-content: center;
    }

    &-content {
        font-family: 'Vollkorn', serif;
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 67px;

        color: #000000;

        display: flex;
        justify-content: center;
        margin-top: 78px;
        margin-bottom: 78px;
    }

    &-polaroids {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    &-block {
        display: flex;
        justify-content: center;

        & img {
            margin-top: 60px;
            margin-left: 33px;
            margin-right: 33px;
            width: 71px;
            height: 71px;
        }
    }
}

.index-screen__music {
    &-content {
        font-family: 'Vollkorn', serif;
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 67px;

        color: #000000;

        display: flex;
        justify-content: center;
        margin-top: 78px;
        margin-bottom: 78px;
    }

    &-albums {
        width: 100%;
        height: 328px;
        margin-top: 59px;

        background: rgba(255, 255, 255, 0.5);
    }

    &-vinil {
        display: flex;
        width: 100%;
        justify-content: center;

        & img {
            width: 510px;
            height: 613px;
            margin-top: 0;
            display: flex;
            justify-content: center;
        }
    }

    &-container {
        &-layout {
            display: flex;
            flex-direction: row;

            justify-content: space-around;
        }

        &-music {
            width: 220px;
            display: flex;
            flex-direction: column;
            justify-content: center;

            &_image {
                display: flex;
                justify-content: center;

                & img {
                    width: 190px;
                    height: 190px;
                    margin-top: 32px;
                    display: flex;
                    justify-content: center;
                }
            }

            &_text {
                font-family: 'Vollkorn', serif;
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                line-height: 50px;
                margin-top: 30px;
                width: 220px;
                display: flex;
                justify-content: center;

                color: #000000;
            }
        }
    }
}

.index-screen__tour {
    display: flex;
    width: 100%;
    justify-content: center;

    &-image {
        display: flex;
        margin-top: 90px;
        width: 746px;
        height: 746px;

        border: 4px solid #000000;

        & img {
            width: 666px;
            height: 666px;
            margin-left: 40px;
            margin-top: 40px;
            display: flex;
        }
    }
}

.index-screen__group {
    &-content {
        font-family: 'Vollkorn', serif;
        font-style: normal;
        font-weight: 700;
        font-size: 48px;
        line-height: 67px;

        color: #000000;

        display: flex;
        justify-content: center;
        margin-top: 78px;
        margin-bottom: 78px;
    }

    &-block {
        width: 100%;
        height: 421px;
        display: flex;
        background: #1C1C1C;

        &_image {
            display: flex;

            width: 547px;
            height: 421px;
            margin-left: 55px;
        }

        &_text {
            font-family: 'Vollkorn', serif;
            font-style: normal;
            font-weight: 700;
            font-size: 30px;
            line-height: 42px;
            width: 100%;
            height: auto;

            display: flex;
            justify-content: end;
            align-items: center;
            margin-right: 90px;

            color: #FFFFFF;
        }
    }
}

body {
    margin: 0;
    border: 0;

    position: relative;
    width: 100%;

    background: url('@/assets/images/background.png');
    background-size: 100% 100%;
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
