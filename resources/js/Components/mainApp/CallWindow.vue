<template>
    <div id="call-window">
        <div class="close-button">
            <span @click="closeWindow">&#10060;</span>
        </div>
    </div>
</template>

<script>
export default {
    name: "CallWindow",
    props:['openCallWindow'],
    methods: {
        closeWindow(){
            this.openCallWindow(false);
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
    border: 1px solid rgba(0, 0, 0, .01);
    box-shadow: 0 2px 4px #ee6a59cc;
    display: flex;
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
</style>