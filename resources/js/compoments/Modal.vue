<template>

    <div class="modal">
        <div v-if="!messageReturned">
            <slot name="header">
                <h1>Registrácia na udalosť: "{{ eventData.name }} Conf"</h1>
            </slot>
            <slot name="body">
                <form @submit.prevent="submitForm" novalidate>
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" id="name" v-model="formData.name" required>
                        <span v-if="errors.name" class="error">{{ errors.name }}</span>
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" id="email" v-model="formData.email" required>
                        <span v-if="errors.email" class="error">{{ errors.email }}</span>
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Phone Number:</label>
                        <input type="tel" id="phone_number" v-model="formData.phone_number" required>
                        <span v-if="errors.phone_number" class="error">{{ errors.phone_number }}</span>
                    </div>

                    <button type="submit">Submit</button>
                </form>
            </slot>
        </div>
        <div v-if="messageReturned">
            <slot name="body">
                <h1>{{ responseMessage }}</h1>
            </slot>
        </div>
    </div>

</template>

<script>
import axios from "axios";

export default {
    name: "Modal",
    props: {
        eventData: {
            name: String,
            event_id: Number,
        },
    },
    data() {
        return {
            formData: {
                name: "",
                email: "",
                phone_number: "",
                event_id: this.eventData.event_id,
            },

            responseMessage: "",
            messageReturned: false,

            errors: {
                name: "",
                email: "",
                phone_number: ""
            },
        };
    },

    methods: {
        submitForm() {
            this.errors = {
                name: "",
                email: "",
                phone_number: "",
            };
            let isValid = true;

            if (!this.formData.name) {
                this.errors.name = "Doplnte meno";
                isValid=false;
            }
            if (!/\S+@\S+\.\S+/.test(this.formData.email)) {
                this.errors.email = "Doplnte v správnom tvare 'joe@doe'.sk";
                isValid = false;
            }
            if (!this.formData.phone_number) {
                this.errors.phone_number = "Doplnte tel.číslo";
                isValid=false;
            }
            if (!/^[0-9]+$/.test(this.formData.phone_number)) {
                this.errors.phone_number = "Prosím zadávajte iba čísla";
                isValid = false;
            }


            if (isValid) {
                axios
                    .post("http://localhost/wbpo/public/api/save", this.formData)
                    .then((response) => {
                        this.responseMessage = response.data;
                        console.log(this.responseMessage);
                    })
                    .catch((error) => {
                        this.responseMessage = error.response.data;
                        console.log(this.responseMessage);
                    });
                this.messageReturned = true;
            }
        },
    },
};
</script>


