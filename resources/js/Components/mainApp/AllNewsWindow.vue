<template>
    <section class="all-news-window">
        <div class="close-button"><span @click="closeWindow">&#10060;</span></div>
        <h3 class="all-news-window-title">Новости</h3>
    </section>
</template>

<script>
export default {
    name: "AllNewsWindow",
    props: ['openAllNewsWindow'],
    methods: {
        closeWindow(){
            this.openAllNewsWindow(false)
        }
    }
}
</script>

<style scoped>
.all-news-window {
    max-width: 1440px;
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
    animation: openAllNewsAnimation 1s ease;
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

@keyframes openAllNewsAnimation {
    0% {
        top: -100%;
    }
    100% {
        top: 0;
    }
}
</style>