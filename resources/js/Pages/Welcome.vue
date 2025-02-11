<script setup>
import {ref} from 'vue'
import NavBar from "@/Components/Navbar.vue";
const message = ref("This is an Inertia App.")

</script>

<template>

    <NavBar>
        <h1 class=" text-4xl text-blue-500">Hello World!</h1>
        <div>{{ message }}</div>
    </NavBar>

</template>
