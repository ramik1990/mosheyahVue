<template>
    <section class="all-news-window">
        <div class="close-button"><span @click="closeWindow">&#10060;</span></div>
        <h3 class="all-news-window-title">Новости</h3>
        <div class="all-news-window-body">
            <div class="all-news-window-body-cart" v-for="article in articles" :key="article.id">
                <img :src="article.urlimg" alt="article.title">
                <div class="all-news-window-body-cart-text">
                    <h4>{{ article.title }}</h4>
                    <p>{{ article.text }}</p>
                    <a href="#" class="news-item-button" @click.prevent="readOneArticle(article)">читать</a>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
import axios from 'axios'

export default {
    name: "AllNewsWindow",
    props: ['openAllNewsWindow', 'openOneNewsWindow'],
    data() {
        return {
            articles: ''
        }
    },
    methods: {
        closeWindow(){
            this.openAllNewsWindow(false)
        },
        readOneArticle(value){
            this.openAllNewsWindow(false);
            this.openOneNewsWindow(true, value);
        },
        getDate(dataString) {                       //Метод для форматирования получаемой даты в привычный вид
            const date = new Date(dataString);
            const day = date.getDate();
            const month = date.getMonth() + 1; // Месяцы в JavaScript нумеруются с 0
            const year = date.getFullYear();
            const hours = date.getHours();
            const minutes = date.getMinutes();
            const seconds = date.getSeconds();
            return `${day < 10 ? '0' + day : day}.${month < 10 ? '0' + month : month}.${year}`;
        }
    },
    created() {
        axios.post('/getAllArticles').then(response => {
            this.articles = response.data;
        });
    }
}
</script>

<style scoped>
.all-news-window {
    max-width: 1400px;
    min-width: 567px;
    width: calc(100% - 40px);
    min-height: 100%;
    background-color: #ffffffde;
    position: fixed;
    top: 0;
    padding: 20px;
    gap: 20px;
    display: flex;
    justify-content: start;
    align-items: center;
    flex-direction: column;
    animation: openAllNewsAnimation .5s ease;
    border: 1px solid #ee6a59;
    box-shadow: 0 2px 4px #ee6a59cc;
    overflow-y: auto; 
    z-index: 999;
}
.all-news-window-title {
    position: relative;
    width: 100%;
    color: #3a3f58;
    font-family: Inter;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    text-align: center;
}
.all-news-window-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: calc(50% - 40px);
    width: 80px;
    height: 3px;
    border: none;
    background: #ee6a59;
}
.close-button{
    width: 100%;
    display: flex;
    justify-content: end;
}
.close-button span {
    cursor: pointer;
}
.close-button span:hover {
    transform: scale(1.045);
}
.all-news-window-body {
    width: calc(100% - 40px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: start;
    padding: 0 20px;
    gap: 20px;
}
.all-news-window-body-cart {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
    justify-content: center;
    align-items: center;
    font-family: Inter;
    text-align: justify;
}
.all-news-window-body-cart img {
    max-width: 200px;
    justify-self: center;
}
.all-news-window-body-cart-text h4 {
    width: 100%;
    text-align: center;
}
.news-item-button {
    display: flex;
    padding: 6px 21px 7px;
    justify-content: center;
    align-items: center;
    border-radius: 5px;
    background: #EE6A59;
    text-decoration: none;
    color: #fff;
    font-family: Inter;
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    justify-self: end;
}
.news-item-button:hover {
    color: #ee6a59;
    background-color: #fff;
    transition: background .20s linear;
    border: 1px solid #ee6a59;
    padding: 5px 20px 6px 20px;
}

@keyframes openAllNewsAnimation {
    0% {
        top: -100%;
    }
    100% {
        top: 0;
    }
}
</style>