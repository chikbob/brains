<template>
    <footer :class="cnFooter()">
        <FooterNav/>
    </footer>
</template>

<script setup>
import {cnFooter} from "./footer.const.js";
import FooterNav from './footer__nav.vue';
</script>

<style lang="scss">
.footer {
    display: flex;
    align-items: flex-end;
    width: 100%;
    height: 60px;
    background: #171717;
    align-content: flex-end;
    flex-wrap: nowrap;
    flex-direction: row-reverse;
    justify-content: center;
    margin-top: 76px;
}
</style>