<template>
    <nav>
        <img src="../../../images/logos/main-logo.png" alt="logo">
        <ul>
            <li><a href="">главная</a></li>
            <li><a href="">новости</a></li>
            <li><a href="">о нас</a></li>
            <li><a href="">контакты</a></li>
            <li><a href="">отзывы</a></li>
            <li><a href="">каталог</a></li> 
        </ul>
    </nav>
</template>

<script>
export default {
    name: "MainNav"
}
</script>

<style scoped>
nav {
    background-color: #fff;
    height: 70px;
    display: flex;
}
ul {
    width: 100%;
    height: 100%;
    display: flex;
}
li {
    width: 100%;
    height: 100%;
    list-style: none;
    transition: .5s;
}
li:hover {
    background-color: #EE6A59;
}
ul li a {
    width: 100%;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    text-decoration: none;
    text-transform: uppercase;
    font-family: 'Inter';
    color: #EE6A59;
    font-weight: bold;
    font-size: 20px;
}
ul li a:hover {
    color: #fff;
}


@media (max-width: 1024px) {         /* Планшет */
    nav ul {
        display: none;
    }
}
@media (max-width: 768px) {         /* Мобилка */
    
}
</style>