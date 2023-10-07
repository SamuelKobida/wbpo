<template >

        <div class="modal">

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
                                <label for="phone_number">Phone Number:</label>
                                <input type="tel" id="phone_number" v-model="formData.phone_number" required>
                            </div>

                            <button type="submit">Submit</button>
                        </form>
                    </slot>
        </div>

</template>

<script>
import axios from "axios";

export default {
    name:"Modal",

    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone_number: ""
            },
        };
    },

    methods: {

        submitForm() {
            axios.post('http://localhost/wbpo/public/api/save', this.formData)
        },

    }
}
</script>


