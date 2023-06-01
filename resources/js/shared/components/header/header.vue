<template>
    <header :class="cnHeader()">
        <HeaderLogo/>
        <HeaderNav/>
    </header>
</template>

<script setup>
import {cnHeader} from "./header.const.js";
import HeaderLogo from './header__logo.vue';
import HeaderNav from './header__nav.vue';
</script>

<style lang="scss">
.header {
    display: flex;
    align-items: center;
    width: 100%;
    height: 60px;

    background: #171717;
    
    position: relative;
}
</style>
