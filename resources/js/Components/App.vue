<template>
    <main-nav></main-nav>
    <header-main-page></header-main-page>
    <main>
        <news-main-page></news-main-page>
    </main>
</template>

<script>
import MainNav from './mainApp/Navigation.vue'
import HeaderMainPage from './mainApp/HeaderMainPage.vue'
import NewsMainPage from './mainApp/NewsMainPage.vue'

export default {
    components: {
        'main-nav': MainNav, 
        'header-main-page': HeaderMainPage,
        'news-main-page': NewsMainPage
    }
}
</script>

<style scoped>

</style>