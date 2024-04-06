<template>
    <div class="reviews-block">
        <img src="../../../images/logos/male_avatar.png" alt="avatar" class="avatar">
        <p class="reviews-block-name">Евгений</p>
        <p class="reviews-block-description">
            Отличный магазин! Профессиональные консультации, широкий выбор систем пожаротушения, быстрая доставка. Надежные партнеры в обеспечении безопасности вашего бизнеса. Рекомендую!
        </p>
    </div>
</template>

<script>
export default {
    name: "ReviewsBlockItem"
}
</script>

<style scoped>
.reviews-block {
    width: 100%;
    max-width: 453.34px;
    min-width: 200px;
    margin-top: 100px;
    height: 300px;
    background-color: #fff;
    display: flex;
    flex-direction: column;
    justify-content: end;
    border: 1px solid rgba(0, 0, 0, .01);
    box-shadow: 0 2px 4px #ee6a59cc;
    position: relative;
    padding: 20px 0;
}
.avatar {
    position: absolute;
    left: calc(50% - 100px);
    top: -25%;
    width: 200px;
    height: 200px;
    border-radius: 50%;
}
.reviews-block-name {
    position: absolute;
    top: calc(25% + 45px);
    width: 100%;
    text-transform: uppercase;
    color: #3a3f58;
    text-align: center;
    font-family: Inter;
    font-size: 30px;
    font-style: normal;
    font-weight: 700;
    line-height: normal;
}
.reviews-block-description {
    width: calc(100% - 40px);
    height: 150px;
    color: #3a3f58;
    text-align: justify;
    font-family: Inter;
    font-size: 14px;
    font-style: normal;
    font-weight: 700;
    overflow: hidden;
    line-height: normal;
    padding: 0 20px;
}
</style>