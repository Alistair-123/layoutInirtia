
    <template>

            <div class=" w-[250px] h-[250px]  border border-blue-500 rounded-lg p-4 shadow-md">

                <h1 class="text-4xl ">{{ product.name }}</h1>
                <p>{{ product.description }}</p>
            </div>


    </template>

    <script>
    export default {
        props: {
            product: Object,
        }
    };
    </script>
