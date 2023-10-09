<template>
    <div class="guest-list">
            <ul  v-if="guests.length > 0" v-for="(guest) in guests">
                <li>
                    {{ guest.name }}
                    {{ guest.email }}
                    {{ guest.phone_number }}
                    Event s id:{{ guest.event_id }}
                </li>
            </ul>
    </div>
</template>

<script>
import axios from "axios";

export default {
    name: "Guests",
    data()
    {
        return {
            guests: [],
        }
    },
    mounted()
    {
        this.getGuests();
    },
    methods:{
        getGuests(){
            axios.get("http://localhost/wbpo/public/api/load")
                .then((response) => {
                    this.guests = response.data
                })
                .catch((error) => {
                    console.log(error);
                });
        }
    }
}
</script>

