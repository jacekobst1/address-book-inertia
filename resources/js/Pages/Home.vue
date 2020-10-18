<template>
    <app-layout>
        <v-row class="justify-center pt-16">
            <div class="text-center">
                 <div>
                     <h1 class="text-4xl">
                         Welcome to the {{ $page.env.appName }}!
                     </h1>
                </div>
                <v-btn class="mt-2">
                    Go to the subscribers list
                </v-btn>
            </div>
        </v-row>
    </app-layout>
</template>

<script>
    import AppLayout from './../Layouts/AppLayout'

    export default {
        components: {
            AppLayout,
        },
    }
</script>
