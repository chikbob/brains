<template>
    <a :class="cnHeader('logo')" href="/">
    <img src="@/assets/images/logo.png" alt="logo.png">
    </a>
</template>

<script setup>
import { Link } from '@inertiajs/vue3'
import { cnHeader } from "@/shared/components/header/header.const.js";
</script>

<style lang="scss">
.header__logo img{
    width: 170px;
    height: 33px;
    display: flex;
    margin-left: 40px;
}
</style>
