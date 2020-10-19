<template>
    <div class="min-h-screen">

       <Navbar />

        <main>
            <v-container class="mt-16">
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
