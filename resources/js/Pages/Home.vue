<template>
    <app-layout>
        <v-row class="justify-center pt-16">
            <div class="text-center">
                 <div class="text-4xl">
                     Welcome to the {{ $page.env.appName }}!
                </div>
                <inertia-link href="/subscribers">
                    <v-btn class="mt-4" color="secondary">
                        Go to the subscribers list
                    </v-btn>
                </inertia-link>
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
