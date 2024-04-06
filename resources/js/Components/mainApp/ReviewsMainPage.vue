<template>
    <section class="reviews">
        <h2 class="reviews-title">отзывы</h2>
        <div class="reviews-body">
            <reviews-block-item></reviews-block-item>
            <reviews-block-item></reviews-block-item>
            <reviews-block-item></reviews-block-item>
        </div>
        <a href='#' class="add-review-button">добавить отзыв</a>
    </section>
</template>

<script>
import ReviewsBlockItem from './ReviewsBlockItem.vue'

export default {
    components: {
        'reviews-block-item':ReviewsBlockItem
    },
    name: "ReviewsMainPage"
}
</script>

<style scoped>
.reviews {
    width: calc(100% - 40px);
    padding: 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    background: #fff;
    gap: 20px;
}
.reviews .reviews-title {
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
.reviews .reviews-title::after{
    position: absolute;
    content: '';
    bottom: 0;
    left: calc(50% - 40px);
    width: 80px;
    height: 3px;
    border: none;
    background: #ee6a59;
}
.reviews-body {
    width: 100%;
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(433px, 1fr));
    gap: 20px;
    justify-items: center;
}
.add-review-button {
    margin: auto auto 5px;
    width: 200px;
    height: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
    text-transform: uppercase;
    text-decoration: none;
    background-color: #ee6a59;
    color: #fff;
}
.add-review-button:hover {
    color: #ee6a59;
    background-color: #fff;
    transition: background .20s linear;
    border: 1px solid #ee6a59;
    width: 198px;
    height: 28px;
}
</style>