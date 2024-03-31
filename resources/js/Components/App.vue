<template>
    <main-nav></main-nav>
    <header-main-page></header-main-page>
</template>

<script>
import MainNav from './mainApp/Navigation.vue'
import HeaderMainPage from './mainApp/HeaderMainPage.vue'

export default {
    components: {
        'main-nav': MainNav, 'header-main-page': HeaderMainPage
    }
}
</script>

<style scoped>

</style>