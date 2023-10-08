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
                    <li>09:30 - Registrácia</li>
                    <li>10:30 - Úvodná prezentácia</li>
                    <li>11:30 - Panelová diskusia</li>
                    <li>13:00 - Obed</li>
                    <li>15:00 - Pracovné skupiny</li>
                </ul>
            </div>
            <button  type="button" class="btn" v-on:click="showModal(1)">Mám záujem!</button>
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
            <button type="button" class="btn" v-on:click="showModal(2)">Mám záujem!</button>
        </div>

        <div class="my-container">
            <h1>AngularJS Conf Bratislava</h1>
            <h2>6.6.2024, River Park</h2>
            <p>Hlavný speaker: Miško Hevery</p>
            <p>Téma:"State of AngularJS 2023"</p>

            <div class="my-container-list">
                <p>Program:</p>
                <ul>
                    <li>15:30 - Workshopy</li>
                    <li>17:00 - Diskusia</li>
                    <li>18:30 - Večera</li>
                    <li>20:00 - Kultúrny program</li>
                    <li>22:00 - Záverečný prípitok</li>
                </ul>
            </div>
            <button type="button" class="btn" v-on:click="showModal(3)">Mám záujem!</button>
        </div>
    </div>


    <transition>
    <div class="modal-overlay" v-if="isModalVisible" @click="closeModal"></div>
    </transition>

    <transition>
    <Modal :eventData="eventData" v-if="isModalVisible" @close="closeModal">
        <template v-slot:header>
        </template>
        <template v-slot:body>
        </template>
    </Modal>
    </transition>

</template>

<script>
import Modal from "./Modal.vue";

export default {
    name: "Events",
    components: {
        Modal,
    },
    data() {
        return {
            isModalVisible: false,
            eventData:{
                name:"",
                event_id: ""
            }
        };
    },
    methods: {
        showModal(value) {
            switch (value) {
                case 1:
                    this.eventData.name = "React";
                    this.eventData.event_id = value;
                    break;
                case 2:
                    this.eventData.name = "Vue";
                    this.eventData.event_id = value;
                    break;
                case 3:
                    this.eventData.name = "Angular";
                    this.eventData.event_id = value;
                    break;
            }
            this.isModalVisible = true;
        },
        closeModal() {
            this.isModalVisible = false;
        },
    },
};
</script>


