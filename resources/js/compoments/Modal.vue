<template >

        <div class="modal">

            <header class="modal-header">
                <slot name="header">
                </slot>
                <button type="button" class="btn-close" @click="close">
                    X
                </button>
            </header>

                <section class="modal-body">
                    <slot name="body">
                        <form @submit.prevent="submitForm">
                            <div class="form-group">
                                <label for="name">Name:</label>
                                <input type="text" id="name" v-model="formData.name" required>
                            </div>

                            <div class="form-group">
                                <label for="email">Email:</label>
                                <input type="email" id="email" v-model="formData.email" required>
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone Number:</label>
                                <input type="tel" id="phone" v-model="formData.phone" required>
                            </div>

                            <button type="submit">Submit</button>
                        </form>
                    </slot>
                </section>
        </div>

</template>

<script>
export default {
    name:"Modal",

    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone: "",
            },
        };
    },

    methods: {
        submitForm() {
            // Code...
        },
        close(){
            this.$emit('close')
        }
    }
}
</script>

<style scoped>

.modal {
    width: 400px; /* Adjust the width to your desired size */
    margin: 20px auto; /* Center the container horizontally */
    text-align: center;
    background-color: #f0f0f0; /* Background color for the container */
    border-radius: 10px; /* Rounded corners for the container */
    padding: 20px; /* Add some padding to the container */
    box-shadow: 0 0 10px rgba(0, 0, 0, 1); /* Add a shadow to the container */
    border: 1px solid #ccc;
}

</style>
