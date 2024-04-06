<template>
    <main-nav></main-nav>
    <header-main-page></header-main-page>
    <main>
        <news-main-page></news-main-page>
        <about-main-page></about-main-page>
        <contacts-main-page></contacts-main-page>
        <reviews-main-page></reviews-main-page>
    </main>
    <foot></foot>
</template>

<script>
import MainNav from './mainApp/Navigation.vue'
import HeaderMainPage from './mainApp/HeaderMainPage.vue'
import NewsMainPage from './mainApp/NewsMainPage.vue'
import AboutMainPage from './mainApp/AboutMainPage.vue'
import ContactsMainPage from './mainApp/ContactsMainPage.vue'
import ReviewsMainPage from './mainApp/ReviewsMainPage.vue'
import Footer from './mainApp/Footer.vue'

export default {
    components: {
        'main-nav': MainNav, 
        'header-main-page': HeaderMainPage,
        'news-main-page': NewsMainPage,
        'about-main-page': AboutMainPage,
        'contacts-main-page': ContactsMainPage,
        'reviews-main-page': ReviewsMainPage,
        'foot':Footer
    }
}
</script>

<style scoped>

</style>