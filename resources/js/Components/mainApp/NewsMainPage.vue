<template>
    <section class="news-main-page" id="news">
        <h2>новости</h2>
        <div class="news-block">
            <news-block-item :openOneNewsWindow="showOneNewsWindow" v-for="article in allArticles" :key="article.id" :article="article"></news-block-item>
        </div>
        <a href="#" class="all-news-button" @click.prevent="showAllNewsWindow(true)">все новости</a>

        <all-news-window v-if="allNewsWindow" :openOneNewsWindow="showOneNewsWindow" :openAllNewsWindow="showAllNewsWindow" :articles="allArticles"></all-news-window>
        <one-news-window v-if="oneNewsWindow" :openOneNewsWindow="showOneNewsWindow" :article="moreArticle"></one-news-window>
    </section>
</template>

<script>
import NewsBlockItem from './NewsBlockItem.vue'
import OneNewsWindow from './OneNewsWindow.vue'
import AllNewsWindow from './AllNewsWindow.vue'
import axios from 'axios'

export default {
    props: ['openAllNewsWindow'],
    components: {
        'news-block-item': NewsBlockItem,
        'one-news-window': OneNewsWindow,
        'all-news-window': AllNewsWindow
    },    
    data() {
        return {            
            oneNewsWindow: false,    //окно одной новости
            allNewsWindow: false,    //окно всех новостей
            moreArticle: '',            //Одна новость нажатая на кнопку "читать"
            allArticles: ''            //Все новости выведенные при загрузке страницы
        }
    },
    name: "NewsMainPage",
    methods: {
        showAllNewsWindow(value, value2){           // Показать/Скрыть окно со всеми новостями
            this.allNewsWindow = value;
        },
        showOneNewsWindow(value, value2) {       // Показать/Скрыть окно с одной новостью
            this.oneNewsWindow = value;
            this.moreArticle = value2;
        }
    },
    created() {
        axios.post('/articlesForMainPage').then(response => {
            this.allArticles = response.data;
        });
    }
}
</script>

<style scoped>
.news-main-page {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #fff;
}
.news-main-page h2 {
    position: relative;
    width: 100%;
    text-transform: uppercase;
    color: #3A3F58;
    font-family: 'Inter';
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: center;
    margin: 24.9px 0;
}
.news-main-page h2:after {
    content: '';
    position: absolute;
    width: 80px;
    height: 3px;
    background: #EE6A59;
    border: none;
    bottom: 0;
    left: calc(50% - 40px);
}
.news-block {
    width: calc(100% - 40px);
    display: grid;
    padding: 0 20px;
    grid-template-columns: repeat(auto-fill, minmax(433px, 1fr));
    gap: 20px;
    justify-content: center;
    justify-items: center;
}
.news-block-item {
    background-color: lightyellow;
    display: flex;
    flex-direction: column;
    align-items: center;
}
.all-news-button {
    font-family: Inter;
    margin: 20px auto 5px;
    width: 150px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    text-decoration: none;
    background: #EE6A59;
    color: #fff;
}
.all-news-button:hover {
    color: #ee6a59;
    background-color: #fff;
    transition: background .20s linear;
    border: 1px solid #ee6a59;
    width: 148px;
    height: 28px;
}
</style>