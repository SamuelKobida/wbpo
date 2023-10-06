<template>
    <div class="event-container">
        <h1>Vue Conf Bratislava</h1>
        <h2>20.12.2023, Crown Plaza</h2>
        <p>Hlavný speaker: Samuel Kobida</p>
        <p>Téma:"State of Vue 2023"</p>

        <div class="event-list">
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

    <Modal
        v-if="isModalVisible"
        @close="closeModal">

        <template v-slot:header>
        </template>

        <template v-slot:body>
        </template>

    </Modal>

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

<style scoped>

.event-container {
    width: 400px; /* Adjust the width to your desired size */
    margin: 0 auto; /* Center the container horizontally */
    text-align: center;
    background-color: #f0f0f0; /* Background color for the container */
    border-radius: 10px; /* Rounded corners for the container */
    padding: 20px; /* Add some padding to the container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 1); /* Add a shadow to the container */
    border: 1px solid #ccc;
}

.event-list {
    text-align: left; /* Align the list items to the left */
}

button {
padding: 10px 20px;
font-size: 16px;
background-color: #007bff; /* Blue button color */
color: #fff; /* White text color */
border: none;
border-radius: 5px;
cursor: pointer;
transition: background-color 0.3s;
}

button:hover {
background-color: #0056b3; /* Darker blue on hover */
}
</style>
