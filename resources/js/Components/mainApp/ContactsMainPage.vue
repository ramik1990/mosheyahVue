<template> 
    <section class="contacts" id="contacts">
        <h2 class="contacts-title">контакты</h2>
        <div class="contacts-body">
            <div class="contacts-body-col1">
                <h3>ТОО "Мошеях"</h3>
                <div class="contacts-social-buttons">
                    <a href="#"><img src="../../../images/logos/facebook.png" alt="facebook"></a>
                    <a href="#"><img src="../../../images/logos/instagram.png" alt="instagram"></a>
                    <a href="#"><img src="../../../images/logos/whatsapp.png" alt="whatsapp"></a>
                </div>
                <span>
                    Адрес: Казахстан, г. Астана, ул. Омарова, 111
                </span>
                <span>
                    E-mail: info@01.com.kz
                </span>
                <span>
                    Телефоны: +7 777 5220201, +7 717 2251199
                </span>
                <a href="#" @click="openWindow" class="contacts-button"><img src="../../../images/logos/phone.png" alt="call-button">Заказать звонок</a>
                <a href="#" class="contacts-button"><img src="../../../images/logos/catalog.png" alt="our-catalog">Наш каталог</a>
            </div>
            <div class="contacts-body-col2">
                <div style="position:relative;overflow:hidden;"><a href="https://yandex.ru/maps/org/mosheyakh/173176643030/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:0px;">Мошеях</a><a href="https://yandex.ru/maps/163/astana/category/electronic_devices_and_components/184107062/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:14px;">Электронные приборы и компоненты в Астане</a><a href="https://yandex.ru/maps/163/astana/category/firefighting_equipment/184105356/?utm_medium=mapframe&utm_source=maps" style="color:#eee;font-size:12px;position:absolute;top:28px;">Пожарное оборудование в Астане</a><iframe src="https://yandex.ru/map-widget/v1/?ll=71.437813%2C51.171615&mode=search&oid=173176643030&ol=biz&sctx=ZAAAAAgBEAAaKAoSCeAw0SAF3FFAEWRA9nr3lUlAEhIJm6p7ZHPVjD8R8ZvCSgUVdT8iBgABAgMEBSgKOABAowFIAWIqY29sbGVjdGlvbnNfcmFua2luZ19tb2RlbD1jb2xsZWN0aW9uc19kc3NtagJrep0BzcxMPaABAKgBAL0B9mpswcIBBta7h5GFBeoBAPIBAPgBAIICFdCi0J7QniAi0JzQntCo0JXQr9ClIooCAJICAJoCDGRlc2t0b3AtbWFwcw%3D%3D&sll=71.437813%2C51.171615&sspn=0.014677%2C0.005365&text=%D0%A2%D0%9E%D0%9E%20%22%D0%9C%D0%9E%D0%A8%D0%95%D0%AF%D0%A5%22&z=17.07" width="100%" height="500" frameborder="0" allowfullscreen="true" style="position:relative;"></iframe></div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    name: "ContactsMainPage",
    props: ['openCallWindow'],
    methods: {
        openWindow(){
            this.openCallWindow(true);
        }
    }
}
</script>

<style scoped>
.contacts {
    width: calc(100% - 40px);
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
    background: #fff;
}
.contacts-title {
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
.contacts .contacts-title:after {
    content: '';
    position: absolute;
    bottom: 0;
    left: calc(50% - 40px);
    width: 80px;
    height: 3px;
    border: none;
    background: #ee6a59;
}
.contacts-body {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(510px, 1fr));
    row-gap: 10px;
}
.contacts-body-col1 {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
}
.contacts-body-col1 h3 {
    color: #ee6a59;
    font-family: Inter;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    margin: 30px 0;
}
.contacts-body-col1 .contacts-social-buttons {
    display: flex;
    gap: 20px;
}
.contacts-body-col1 .contacts-social-buttons img {
    width: 35px;
    height: 35px;
}
.contacts-body-col1 .contacts-social-buttons img:hover {
    transform: scale(1.05);
}
.contacts-body-col1 span {
    display: block;
    color: #3a3f58;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.contacts-body-col1 .contacts-button {
    display: flex;
    width: 275px;
    height: 45px;
    padding: 7px 7px 8px 28px;
    justify-content: start;
    align-items: center;
    gap: 20px;
    background: #ee6a59;
    box-shadow: 0 3px 4px #00000040;
    text-transform: uppercase;
    text-decoration: none;
    color: #fffffd;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.contacts-body-col1 .contacts-button:hover {
    transform: scale(1.01);
}
.contacts-body-col1 .contacts-button:nth-last-child(1) {
    background: #3a3f58;
}
.contacts-body-col1 .contacts-button img {
    width: 45px;
    height: 45px;
}
</style>