<template>
    <section class="one-news-window">
        <div class="close-button"><span @click="closeWindow">&#10060;</span></div>
        <h3 class="one-news-window-title">Одна Новость</h3>
    </section>
</template>

<script>

export default {
    props: ['openOneNewsWindow'],
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
    font-size: 30px;
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

@keyframes openOneNewsAnimation {
    0% {
        top: -100%;
    }
    100% {
        top: 0;
    }
}
</style>