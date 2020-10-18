<template>
    <app-layout>
        <div class="p-6 sm:px-20 container">
            <div class="mt-8 text-2xl mt-">
                Welcome to the {{ $page.env.appName }}!
            </div>

            <div class="mt-6 text-gray-500">
                Go to the subscribers list
            </div>
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
