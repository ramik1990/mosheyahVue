<template>
    <div class="News-block-Item">
        <img src="https://images.satu.kz/141994070_w600_h300_141994070.jpg" alt="newsItemImg">
        <p class="news-item-title">История АПТ</p>
        <div class="news-item-description">
            История устройств пожаротушения ведется с 1863 года, когда Алансоном Крэйном (США) был изобретен первый огнетушитель, спустя почти 10 лет появилась система пожаротушения, которую в 1872 году запатентовал Пратт. И только в 1874 году в США наконец-то была сконструирована и установлена Генри Пармали в его мануфактуре по производству фортепиано первая полуавтоматическая система водного пожаротушения. Сегодня автоматические системы пожаротушения – это полный контроль и тушение пожаров в зданиях и сооружениях без участия человека. По сложности конструкционных решений их можно сгруппировать в инженерные системы пожаротушения, требующие тщательного проектирования, монтажа и пуско-наладочных работ, и в модульные установки пожаротушения, устанавливаемые в стандартные (типовые) промышленные, производственные, складские и жилые помещения.
        </div>
        <div class="news-item-footer">
            <span class="news-item-date">22.01.2024</span>
            <a href="#" class="news-item-button">читать</a>
        </div>
    </div>
</template>

<script>
export default {
    name: "NewsBlockItem"
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