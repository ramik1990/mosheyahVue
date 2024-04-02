<template>
    <section class="news-main-page">
        <h2>новости</h2>
        <div class="news-block">
            <news-block-item></news-block-item>
            <news-block-item></news-block-item>
            <news-block-item></news-block-item>
        </div>
        <a href="#" class="all-news-button">все новости</a>
    </section>
</template>

<script>
import NewsBlockItem from './NewsBlockItem.vue'

export default {
    components: {
        'news-block-item': NewsBlockItem
    },
    name: "NewsMainPage"
}
</script>

<style scoped>
.news-main-page {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
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
</style>