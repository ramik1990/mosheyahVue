<template>
    <section class="one-news-window">
        <div class="close-button"><span @click="closeWindow">&#10060;</span></div>
        <h3 class="one-news-window-title">{{ this.article.title }}</h3>
        <div class="window-body">
            <img :src="this.article.urlimg" :alt="this.article.title" class="one-news-window-img">
            <p class="one-news-window-body">
                {{ this.article.text }}
            </p>
        </div>
    </section>
</template>

<script>

export default {
    props: ['openOneNewsWindow', 'article'],
    name: "OneNewsWindow",
    methods: {
        closeWindow(){
            this.openOneNewsWindow(false)
        }
    }
}
</script>

<style scoped>
.one-news-window {
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
    animation: openOneNewsAnimation .5s ease;
    z-index: 999;
    border: 1px solid #ee6a59;
    box-shadow: 0 2px 4px #ee6a59cc;
}
.one-news-window-title {
    position: relative;
    width: 100%;
    color: #3a3f58;
    font-family: Inter;
    font-size: 24px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    text-align: center;
}
.one-news-window-title:after {
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
.window-body {
    margin-top: 80px;
    min-height: 100%;
    max-width: 800px;
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    align-items: center;
    gap: 30px;
}
.one-news-window-body {
    font-family: Inter;
    font-size: 18px;
    padding: 0 20px;
}
.one-news-window-img {
    max-width: 449px;
    max-height: 200px;
}

@keyframes openOneNewsAnimation {
    0% {
        top: -100%;
    }
    100% {
        top: 0;
    }
}
</style>