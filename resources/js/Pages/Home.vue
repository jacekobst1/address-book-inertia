<template>
    <app-layout>
        <div class="container">
            <span>
                Welcome to the {{ $page.env.appName }}!
            </span>
            <v-btn>
                Go to the subscribers list
            </v-btn>
        </div>
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
