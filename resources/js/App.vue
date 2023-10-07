<template>

    <div class="container-box">
        <div class="my-container">
            <h1>React Conf Bratislava</h1>
            <h2>24.1.2023, Crown Plaza</h2>
            <p>Hlavný speaker: Jordan Walke</p>
            <p>Téma:"State of React 2023"</p>

            <div class="my-container-list">
                <p>Program:</p>
                <ul>
                    <li>10:00 - Príchod hostí</li>
                    <li>11:00 - Prípitok</li>
                    <li>11:30 - Keynote</li>
                    <li>12:30 - Obed</li>
                    <li>14:00 - Networking</li>
                </ul>
            </div>
            <button type="button" class="btn" @click="showModal">Mám záujem!</button>
        </div>

        <div class="my-container">
            <h1>Vue Conf Bratislava</h1>
            <h2>20.12.2023, Sheraton</h2>
            <p>Hlavný speaker: Evan You</p>
            <p>Téma:"State of Vue 2023"</p>

            <div class="my-container-list">
                <p>Program:</p>
                <ul>
                    <li>10:00 - Príchod hostí</li>
                    <li>11:00 - Prípitok</li>
                    <li>11:30 - Keynote</li>
                    <li>12:30 - Obed</li>
                    <li>14:00 - Networking</li>
                </ul>
            </div>
            <button type="button" class="btn" @click="showModal">Mám záujem!</button>
        </div>

        <div class="my-container">
            <h1>AngularJS Conf Bratislava</h1>
            <h2>6.6.2024, River Park</h2>
            <p>Hlavný speaker: Miško Hevery</p>
            <p>Téma:"State of AngularJS 2023"</p>

            <div class="my-container-list">
                <p>Program:</p>
                <ul>
                    <li>10:00 - Príchod hostí</li>
                    <li>11:00 - Prípitok</li>
                    <li>11:30 - Keynote</li>
                    <li>12:30 - Obed</li>
                    <li>14:00 - Networking</li>
                </ul>
            </div>
            <button type="button" class="btn" @click="showModal">Mám záujem!</button>
        </div>
    </div>


    <transition name="fade" appear>
        <div class="modal-overlay" v-if="isModalVisible" @click="closeModal"></div>
    </transition>
    <transition name="fade" appear>
    <Modal v-if="isModalVisible" @close="closeModal">
        <template v-slot:body>
        </template>
    </Modal>
    </transition>

</template>

<script>
import Modal from "./compoments/Modal.vue";

export default {
    name: "App",
    components: {
        Modal,
    },
    data() {
        return {
            isModalVisible: false,
        };
    },
    methods: {
        showModal() {
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
    },
};
</script>

<style>

.container-box {
    display: flex;
    justify-content: center;
}

.my-container {
    flex: 0 0 calc(33.33% - 100px);
    margin: 15px 15px;
    text-align: center;
    background-color: #e1b955;

    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
    border: 1px solid #ccc;
}

.my-container-list {
    text-align: left;
}

button {
margin: 10px;
padding: 10px 20px;
font-size: 16px;
background-color: #D84C02;
color: #fff;
border: none;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
}

button:hover {
background-color: #f95803;
}

input {
    width: 90%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 16px;
}


.modal {
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    z-index: 99;
    width: 100%;
    max-width: 400px;
    background-color: #e1b955;
    text-align: center;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
    border: 1px solid #ccc;
}

.modal-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 98;
    background-color: rgba(0, 0, 0, 0.3);
}

.fade-leave-active {
    transition: opacity .5s;
}

.fade-leave-to {
    opacity: 0;
}

html, body {
    background-color: #c7c9d1;

}

</style>
