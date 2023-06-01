<template>
    <nav :class="cnFooter('nav')">
        <div :class="cnFooter('nav-text')">
            © 2023 Brains. All Rights Reserved.
        </div>
    </nav>
</template>

<script setup>
import { cnFooter } from './footer.const';
</script>

<style lang="scss" scoped>
.footer__nav {
    font-family: 'Vollkorn';
    font-style: normal;
    font-weight: 700;
    font-size: 36px;
    line-height: 50px;
    text-align: center;
    display: flex;
    color: #FFFFFF;
    justify-content: center;
}
</style>