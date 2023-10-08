<template>
    <nav class="navbar">
            <div class="navbar-content">
            <div class="navbar-brand">
                <p>WBPO</p>
            </div>
            <div class="navbar-list">
                <router-link to="/events" class="navbar-item">Events</router-link>
                <router-link to="/guests" class="navbar-item">Guests</router-link>
            </div>
        </div>
    </nav>
    <div>
        <router-view></router-view>
    </div>
</template>

<script>
export default {
    name: "App",
}
</script>

<style>
.navbar {
    background-color: #333;
}

.navbar-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-left: 20px;
    margin-right: 20px;
}

.navbar-brand {
    color:#D84C02;
    font-size:30px;
}

.navbar-item {
    color: white;
    text-decoration: none;
    margin: 1rem;
}

.navbar-item:hover {
    color:#D84C02;
}

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
    background-color: rgba(0, 0, 0, 0.5);
}

html, body {
    background-color: #c7c9d1;
    margin: 0;
    padding: 0;

}

.error {
    color: red;
    font-size: 0.875rem;
}

.guest-list{
    height: 65vh;
    margin: 50px 50px;
    text-align: center;
    background-color: whitesmoke;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 1);
    border: 1px solid #ccc;
}

.v-enter-from { opacity: 0 }

.v-enter-active,
.v-leave-active {
    transition: opacity 0.5s ease;
}
.v-leave-to { opacity: 0 }

</style>
