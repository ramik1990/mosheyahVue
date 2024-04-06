<template>
    <footer>
        <h4 class="footer-title">тоо "Мошеях"</h4>
        <span>Адрес: Казахстан, г. Астана, ул. Омарова, д. 111</span>
        <div class="contacts-social-buttons">
            <a href="#"><img src="../../../images/logos/facebook.png" alt="facebook"></a>
            <a href="#"><img src="../../../images/logos/instagram.png" alt="instagram"></a>
            <a href="#"><img src="../../../images/logos/whatsapp.png" alt="whatsapp"></a>
        </div>
        <a href="#" class="cabinet-button">Войти</a>
    </footer>
</template>

<script>
export default {
    name: "Footer"
}
</script>

<style scoped>
footer {
    width: calc(100% - 40px);
    height: 150px;
    padding: 20px;
    background-color: #ee6a59;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
}
footer h4 {
    color: #ece6cd;
    font-family: Inter;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    margin: 0;
    padding: 0;
    text-transform: uppercase;
}
footer span {
    color: #3a3f58;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.contacts-social-buttons {
    display: flex;
    gap: 20px;
}
.contacts-social-buttons img {
    width: 35px;
    height: 35px;
}
.contacts-social-buttons img:hover {
    transform: scale(1.05);
}
.cabinet-button {
    text-decoration: none;
    font-family: Inter;
    border: 1px #3a3f58 dotted;
    border-radius: 5px;
    width: 70px;
    height: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    font-size: 14px;
    font-weight: 700;
    color: #fff;
}
.cabinet-button:hover {
    transform: scale(1.025);
    color: #ee6a59;
    background-color: #fff;
    transition: all .15s linear;
}
</style>