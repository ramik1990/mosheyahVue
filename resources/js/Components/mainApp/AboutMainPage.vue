<template>
    <section class="about">
        <h2 class="about-title">о нас</h2>
        <span class="about-description">
            Компания «МОШЕЯХ» ® г. Астана основана в 2004 году и является официальным представителем ЗАО «ПО «Спецавтоматика» (г.Бийск,Россия), ООО «Торговый Дом АДЛ» (г.Москва, Россия), ОАО «Рукав» ( г.Бийск,Россия), ООО « Апогей»(Россия,г.Москва), НПК ЗАО «Источник Плюс»(Россия, г.Бийск), ООО «Ярпожинвест» ( Россия, г. Ярославль). Так же компания является партнерами ООО «Газовик» (Россия,г.Саратов). Мы разрабатываем комплексные проекты по защите объектов, специальные технические условия (СТУ). Защита объекта- это комплексная задача. Грамотный расчет при проектировании, правильный выбор оборудования, его надежная работа и профессиональный монтаж позволяют в совокупности обеспечить эффективную защиту от пожара. Специалисты ТОО «МОШЕЯХ», имея многолетний опыт работы в этой области, всегда окажут помощь в вопросах пожарной безопасности объектов.
        </span>
        <div class="about-body">
            <div class="about-body-col1">
                <div class="about-body-col1-title">
                    <p>Конкурентные преимущества Компании:</p>
                    <ul class="about-col1-list">
                        <li>Комплексность оснащения (полный цикл услуг по оснащению «под ключ»)</li>
                        <li>Индивидуальная система скидок (гибкое обсуждение условий, наиболее выгодных для каждого из партнеров)</li>
                        <li>Прямые заводские поставки (собственная налаженная система ВЭД и логистики)</li>
                        <li>Профессионализм и надежность- широкий ассортимент</li>
                    </ul>
                    <p>Основные направления деятельности Компании:</p>
                    <ul class="about-col1-list">
                        <li>Проектирование и монтаж систем АПТ</li>
                        <li>Поставка противопожарного оборудования пр-ва России по ценам заводов-изготовителей</li>
                        <li>Производство модульных пожарных насосных установок спринклерного, дренчерного и пенного пожаротушения.</li>
                    </ul>
                </div>
            </div>
            <div class="about-body-col2">
                <div class="about-body-col2-title">
                    Нашими клиентами являются:
                </div>
                <div class="about-col2-clients">
                    <img src="../../../images/logos/clients/bahus.png" alt="bahus">
                    <img src="../../../images/logos/clients/basisa.png" alt="basisa">
                    <img src="../../../images/logos/clients/bolashak.png" alt="bolashak">
                    <img src="../../../images/logos/clients/ctc.png" alt="ctc">
                    <img src="../../../images/logos/clients/kazakhmys.png" alt="kazakhmys">
                    <img src="../../../images/logos/clients/sinoil.png" alt="sinoil">
                    <img src="../../../images/logos/clients/sml.png" alt="sml">
                    <img src="../../../images/logos/clients/stroymart.png" alt="stroymart">
                </div>
            </div>
        </div>
        <a href="#" class="about-footer-button"><img src="../../../images/logos/certicon.png" alt="">наши сертификаты</a>
    </section>
</template>

<script>
export default {
    name: "AboutMainPage"
}
</script>

<style scoped>
.about {
    width: calc(100% - 40px);
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    gap: 20px;
    background: #fff;
}
.about-title {
    width: 100%;
    text-align: center;
    position: relative;
    color: #3a3f58;
    font-family: Inter;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
}
.about-title:after {
    content: '';
    position: absolute;
    width: 80px;
    height: 3px;
    background: #ee6a59;
    border: none;
    bottom: 0;
    left: calc(50% - 40px);
}
.about-description {
    width: 100%;
    display: block;
    color: #3a3f58;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-align: justify;
}
.about-body {
    display: grid;
    width: 100%;
    grid-template-columns: repeat(auto-fill, minmax(510px, 1fr));
}
.about-body-col1, .about-body-col2 {
    width: 100%;
}
.about-body-col1-title p{
    width: 100%;
    color: #fff;
    display: inline-flex;
    background: #ee6a59;
    padding: 14px 0 15px;
    justify-content: center;
    align-items: center;
    text-align: center;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.about-col1-list {
    text-align: justify;
    width: calc(100% - 40px);
    display: block;
    list-style-type: disc;
    margin-block-start: 1em;
    margin-block-end: 1em;
    margin-inline-start: 0px;
    margin-inline-end: 0px;
    padding-inline-start: 40px;
    unicode-bidi: isolate;
    font-size: 16px;
    font-family: Inter;
}
.about-body-col2-title {
    width: 100%;
    color: #3a3f58;
    text-align: center;
    font-family: Inter;
    font-size: 20px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.about-col2-clients {
    width: calc(100% - 40px);
    height: calc(100% - 40px);
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(4, 105px);
    grid-template-rows: repeat(2, 105px);
    gap: 30px;
    justify-content: center;
    align-content: center;
}
.about-footer-button {
    width: 244px;
    height: 34px;
    display: inline-flex;
    padding: 13px 12px 13px 14px;
    justify-content: center;
    align-items: center;
    gap: 15px;
    background: #3a3f58;
    color: #fff;
    font-family: Inter;
    font-size: 16px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
    text-transform: uppercase;
    text-decoration: none;
}
</style>