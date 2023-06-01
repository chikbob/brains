<template>
    <nav :class="cnHeader('nav')">
        <div :class="cnHeader('nav-container')">
            <div :class="cnHeader('nav-socials')">
                <a href="https://www.facebook.com/BRAINSBAND" target="_blank"><img src="@/assets/images/fb.png"
                        alt="fb.png"></a>
            </div>
            <div :class="cnHeader('nav-socials')">
                <a href="https://www.instagram.com/brainsband/" target="_blank"><img src="@/assets/images/instagram.png"
                        alt="instagram.png"></a>
            </div>
            <div :class="cnHeader('nav-socials')">
                <a href="https://music.apple.com/hu/artist/bráins/342669962" target="_blank"><img
                        src="@/assets/images/itunes.png" alt="itunes.png"></a>
            </div>
            <div :class="cnHeader('nav-socials')">
                <a href="https://open.spotify.com/artist/2frn30cyNJHth8eZrxJa3X" target="_blank"><img
                        src="@/assets/images/spotify.png" alt="spotify.png"></a>
            </div>
        </div>
        <div :class="cnHeader('nav-container_right')">
            <a href="#tour" :class="cnHeader('nav-container_right-link')">TOUR</a>
            <a href="#group" :class="cnHeader('nav-container_right-link')">GROUP</a>
            <a href="#music" :class="cnHeader('nav-container_right-link')">MUSIC</a>
            <a href="#community" :class="cnHeader('nav-container_right-link')">COMMUNITY</a>
        </div>
    </nav>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnHeader } from './header.const';
</script>

<style lang="scss" scoped>
.header__nav {
    display: flex;
    flex-direction: row;

    &-container {
        display: flex;
        height: 60px;
        align-items: center;

        &_right {
            display: flex;
            margin-left: 23%;
            height: 60px;
            align-items: flex-end;
            width: 100%;

            &-link {
                font-family: 'Vollkorn', serif;
                font-style: normal;
                font-weight: 700;
                font-size: 36px;
                text-decoration: none;

                height: 56px;
                margin: 4px 0 0 40px;

                color: #FFFFFF;

                display: flex;
                align-items: center;
            }
        }
    }

    &-socials {
        margin-left: 40px;

        & img {
            width: 33px;
            height: 33px;
            display: flex;
        }
    }
}
</style>