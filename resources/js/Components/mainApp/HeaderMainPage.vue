<template>
    <header>
        <div class="header-content">
            <div class="header-social-buttons">
                <a href="#"><img src="../../../images/logos/facebook.png" alt="facebook"></a>
                <a href="#"><img src="../../../images/logos/instagram.png" alt="instagram"></a>
                <a href="#"><img src="../../../images/logos/whatsapp.png" alt="whatsapp"></a>
            </div>
            <div class="header-title">
                ЗА БЕЗОПАСНОСТЬ НЕОБХОДИМО ПЛАТИТЬ, А ЗА ЕЕ ОТСУТСТВИЕ - РАСПЛАЧИВАТЬСЯ
            </div>
            <div class="header-call-button">
                <a href="#" class="call-button">
                    <img src="../../../images/logos/phone.png" alt="call-button">
                    <p>заказать звонок</p>
                </a>
            </div>
        </div>
    </header>
</template>

<script>
export default {
    name: "HeaderMainPage"
}
</script>

<style scoped>
header {
    width: 100%;
    height: 500px;
    background-image: url('../../../images/backgrounds/background-header-main.png');
    display: flex;
    justify-content: start;
    align-items: center;
}
header .header-content {
    width: 580px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
header .header-content .header-social-buttons {
    display: flex;
    gap: 20px;
}
header .header-content .header-social-buttons img:hover {
    transform: scale(1.05);
}
.header-title {
    font-family: 'Inter';
    text-align: center;
    color: #EE6A59;
    font-size: 24px;
    font-weight: bold;
}
.header-call-button .call-button {
    width: 270px;
    height: 60px;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 10px;
    background: #EE6A59;
    border-radius: 50px;
    text-decoration: none;
    font-size: 16px;
    font-family: 'Inter';
    font-weight: bold;
    box-shadow: 0 3px 4px #00000040;
}
.header-call-button .call-button:hover {
    border: 2px solid rgb(252, 197, 197);
    width: 266px;
    height: 56px;   
}
.header-call-button .call-button img{
    width: 45px;
    height: 45px;
}
.header-call-button .call-button p{
    color: #ffffff;
    text-transform: uppercase;
}


@media (max-width: 1024px) {         /* Планшет */
    /* стили для планшетов */
}

@media (max-width: 768px) {         /* Мобилка */
    header .header-content {
        width: 100%;
        background: #ffffff4f;
    }
}
</style>