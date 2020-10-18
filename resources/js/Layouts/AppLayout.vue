<template>
    <div class="min-h-screen bg-gray-100">

       <Navbar />

        <main>
            <v-container>
                <slot />
            </v-container>
        </main>

        <portal-target name="modal" multiple />
    </div>
</template>

<script>
    import Navbar from '../Components/Navbar';

    export default {
        components: {
            Navbar,
        },
    }
</script>
