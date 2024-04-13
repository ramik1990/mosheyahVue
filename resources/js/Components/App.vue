<template>
    <main-nav></main-nav>
    <header-main-page :openCallWindow="showCallWindow"></header-main-page>
    <main>
        <news-main-page></news-main-page>
        <about-main-page></about-main-page>
        <contacts-main-page :openCallWindow="showCallWindow"></contacts-main-page>
        <reviews-main-page></reviews-main-page>
        <call-window v-if="callWindow" :openCallWindow="showCallWindow"></call-window>
        <all-news-window v-if="allNewsWindow"></all-news-window>
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
import CallWindow from './mainApp/CallWindow.vue'
import AllNewsWindow from './mainApp/AllNewsWindow.vue'

export default {
    components: {
        'main-nav': MainNav, 
        'header-main-page': HeaderMainPage,
        'news-main-page': NewsMainPage,
        'about-main-page': AboutMainPage,
        'contacts-main-page': ContactsMainPage,
        'reviews-main-page': ReviewsMainPage,
        'foot':Footer,
        'call-window': CallWindow,
        'all-news-window': AllNewsWindow
    },
    data() {
        return {
            callWindow: false,  // окно обратной связи
            allNewsWindow: true    //окно всех новостей
        }
    },
    methods: {
        showCallWindow(value) {
            this.callWindow = value;
        }
    }
}
</script>

<style scoped>

</style>