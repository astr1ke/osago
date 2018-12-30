<template>
    <img class="mainPage" :src="src" >
</template>

<script>
    export default {
        props: ['src']
    }
</script>

<style scoped>
    .mainPage {
        align-items: center !important;
        max-width: 620px !important;
        max-height: 100% !important;
        border-radius: 20px !important;
        margin-bottom: 25px !important
    }
</style>
