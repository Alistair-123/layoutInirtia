<template>
    <div class="h-24 w-screen bg-blue-500 flex items-center justify-between px-10">
      <!-- Logo -->
      <div class="text-white text-xl font-bold">Star Rising Page</div>

      <!-- Hamburger Button (Visible on Small Screens) -->
      <button @click="isOpen = !isOpen" class="text-white lg:hidden focus:outline-none">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
        </svg>
      </button>

      <!-- Navigation Links -->
      <div
        :class="isOpen ? 'block' : 'hidden'"
        class="lg:flex lg:gap-10 absolute lg:static top-24 left-0 w-full bg-blue-500 lg:bg-transparent text-white text-center lg:w-auto lg:block transition-all duration-300"
      >
        <Link href="/" class="block lg:inline-block py-4 lg:py-0 px-4">Home</Link>
        <Link href="/about" class="block lg:inline-block py-4 lg:py-0 px-4">About</Link>
        <Link href="/contact" class="block lg:inline-block py-4 lg:py-0 px-4">Contact</Link>
        <Link href="/products" class="block lg:inline-block py-4 lg:py-0 px-4">Product</Link>
      </div>
    </div>

    <main class="p-6">
      <slot></slot>
    </main>
  </template>

  <script setup>
  import { ref } from "vue";
  import { Link } from "@inertiajs/vue3";

  const isOpen = ref(false);
  </script>
