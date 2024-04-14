<template>
    <main-nav></main-nav>
    <header-main-page :openCallWindow="showCallWindow"></header-main-page>
    <main>
        <news-main-page :openAllNewsWindow="showAllNewsWindow"></news-main-page>
        <about-main-page></about-main-page>
        <contacts-main-page :openCallWindow="showCallWindow"></contacts-main-page>
        <reviews-main-page :openAllReviewsWindow="showAllReviewsWindow"></reviews-main-page>
        <!-- Окна диалоговые -->
        <call-window v-if="callWindow" :openCallWindow="showCallWindow"></call-window>
        <all-news-window v-if="allNewsWindow" :openAllNewsWindow="showAllNewsWindow"></all-news-window>
        <all-reviews-window v-if="allReviewsWindow" :openAllReviewsWindow="showAllReviewsWindow"></all-reviews-window>
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
import AllReviewsWindow from './mainApp/AllReviewsWindow.vue'

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
        'all-news-window': AllNewsWindow,
        'all-reviews-window': AllReviewsWindow
    },
    data() {
        return {
            callWindow: false,  // окно обратной связи
            allNewsWindow: false,    //окно всех новостей
            allReviewsWindow: false    //окно всех отзывов
        }
    },
    methods: {
        showCallWindow(value) {   // Показать/Скрыть окно обратной связи
            this.callWindow = value;       
        },
        showAllNewsWindow(value) {       // Показать/Скрыть окно со всеми новостями
            this.allNewsWindow = value;
        },
        showAllReviewsWindow(value) {       // Показать/Скрыть окно со всеми отзывами
            this.allReviewsWindow = value;
        }
    }
}
</script>

<style scoped>

</style>