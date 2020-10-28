<template>
    <v-toolbar flat>
        <v-spacer />
        <inertia-link href="/subscribers/add">
            <v-btn color="success">
                <v-icon class="mr-2">
                    mdi-plus
                </v-icon>
                Add new
            </v-btn>
        </inertia-link>
    </v-toolbar>
</template>

<script>
    export default {
        name: 'SubscribersIndexToolbar',
    }
</script>
