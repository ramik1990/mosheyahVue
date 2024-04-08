<template>
    <div id="call-window">
        <div class="close-button">
            <span @click="closeWindow">&#10060;</span>
            <div class="call-window-body">
                <h3>заказать звонок</h3>
                <form action="" method="post" id="contact-form">
                    <input type="text" name="name" id="name" v-model="name" placeholder="Введите имя" required>
                    <input type="text" name="phone" id="phone" v-model="phone" placeholder="Ваш номер телефона" required pattern="[0-9]{10}" title="Формат: 77772223344 (10 цифр номера телефона без '8' и '+7')">
                    <textarea name="message" id="message" v-model="message" cols="35" rows="10" placeholder="Введите ваше сообщение"></textarea>
                    <button type="submit" class="send-button" @click.prevent="sendForm">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CallWindow",
    props:['openCallWindow'],
    data(){
        return {
            name: '',
            phone: '',
            message: ''
        }
    },
    methods: {
        closeWindow(){
            this.openCallWindow(false);
        },
        sendForm() {
            alert('name: '+this.name+'\nphone: '+this.phone+'\nmessage: '+this.message);
        }
    }
}
</script>

<style scoped>
#call-window  {
    background-color: #ffffffe5;
    position: fixed;
    width: 300px;
    height: 400px;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    border: 1px solid #ee6a59;
    box-shadow: 0 2px 4px #ee6a59cc;
    display: flex;
    animation: openWindow .3s ease-in-out;
}
.close-button {
    width: 100%;
    display: inline-flex;
    flex-direction: column;
    align-items: end;
    padding: 0 5px;
}
.close-button span {
    cursor: pointer;
}
.close-button span:hover {
    transform: scale(1.02);
    background-color: rgba(0, 0, 0, 0.068);
    border-radius: 50%;
}
.call-window-body {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
}
.call-window-body h3 {
    width: 100%;
    text-align: center;
    text-transform: uppercase;
    margin-bottom: 20px;
    font-weight: 700;
    font-family: Inter;
}
#contact-form {
    width: 100%;    
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 20px;
}
#contact-form input {
    width: 95%;
    font-size: 16px;
    font-family: Inter;
}
.send-button {
    width: 50%;
    height: 30px;
    font-family: Inter;
    font-size: 14px;
    text-transform: uppercase;
    font-weight: 700;
    background-color: #ee6a59;
    border: none;
    color: #fff;
    cursor: pointer;
}
.send-button:hover {
    transition: all ease .3s;
    background-color: #fff;
    color: #ee6a59;
    border: 1px solid #ee6a59;
    box-shadow: 0 2px 4px #ee6a59cc;
    transform: scale(1.05);
}

@keyframes openWindow {
    0% {
        top: -200px;
    }
    100% {
        top: 50%;
    }
}
</style>