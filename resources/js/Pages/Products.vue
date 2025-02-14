<template class="flex items-center justify-center h-screen">
    <Navbar>
    <div class=" flex items-center justify-center h-auto">
      <div class="grid sm:grid-cols-1 lg:grid-cols-3 gap-4  ">
        <CardComp
          v-for="product in products"
          :key="product.id"
          :product="product"
        />
      </div>
    </div>
    </Navbar>
  </template>

  <script>
  import CardComp from '../Components/CardComp.vue';
  import Navbar from '../Components/Navbar.vue';

  export default {
    components: {
      Navbar,
      CardComp
    },
    props: {
      products: Array,
    },
    mounted() {
    console.log('Received products:', this.products);
  }
  };
  </script>
