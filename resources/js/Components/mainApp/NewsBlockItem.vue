<template>
    <div class="News-block-Item">
        <img :src="this.article.urlimg" alt="newsItemImg">
        <p class="news-item-title">{{this.article.title}}</p>
        <div class="news-item-description">
            {{ this.article.text }}            
        </div>
        <div class="news-item-footer">
            <span class="news-item-date">{{ getDate(this.article.created_at) }}</span>
            <a href="#" class="news-item-button" @click.prevent="openOneNewsWindow">читать</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewsBlockItem",
    props: ['openOneNewsWindow', 'article'],
    methods: {
        openOneNewsWindow() {
            this.openOneNewsWindow(true, this.article)
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
    }
}
</script>

<style scoped>
    .News-block-Item {
        width: 100%;
        max-width: 453.34px;
        height: 431px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        border: 1px solid rgba(0, 0, 0, .01);
        box-shadow: 0 2px 4px #ee6a59cc;
        position: relative;
    }
    .News-block-Item img {
        width: 100%;
        height: 200px;
    }
    .news-item-title {
        color: #3a3f58;
        font-family: Inter;
        font-size: 20px;
        font-style: normal;
        font-weight: 700;
        line-height: normal;
        margin: 6px 0;
        text-align: center;
    }
    .news-item-description {
        height: 152px;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
        overflow: hidden;
        text-align: justify;
        padding: 0 20px 5px;
    }
    .news-item-footer {
        width: calc(100% - 20px);
        position: absolute;
        bottom: 0;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 10px;
    }
    .news-item-button {
        display: inline-flex;
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
    }
    .news-item-button:hover {
        color: #ee6a59;
        background-color: #fff;
        transition: background .20s linear;
        border: 1px solid #ee6a59;
        padding: 5px 20px 6px 20px;
    }
    .news-item-date {
        width: 90px;
        color: #3a3f58;
        font-family: Inter;
        font-size: 14px;
        font-style: normal;
        font-weight: 400;
        line-height: normal;
    }
</style>