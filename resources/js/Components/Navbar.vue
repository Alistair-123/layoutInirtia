    <template>
        <div class=" h-24 w-screen  bg-blue-500 flex items-center  justify-between px-10">

            <div  class="text-white text-xl font-bold">
                Star Rising Page
            </div>

            <div class="flex gap-10">

                    <Link href="/" class=" text-white">Home</Link>
                    <Link href="/about" class=" text-white">About</Link>
                    <Link href="/contact" class=" text-white">Contact</Link>

            </div>


        </div>

        <main class="p-6">
            <slot></slot>
        </main>

    </template>

    <script setup>
        import { Link } from "@inertiajs/vue3";
    </script>
