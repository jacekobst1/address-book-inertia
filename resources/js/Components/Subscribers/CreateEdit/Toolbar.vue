<template>
    <v-toolbar flat>
        <inertia-link href="/subscribers">
            <v-btn color="secondary">
                <v-icon class="mr-2">
                    mdi-arrow-left
                </v-icon>
                Go to the list
            </v-btn>
        </inertia-link>
    </v-toolbar>
</template>

<script>
export default {
    name: 'SubscribersCreateEditToolbar',
}
</script>
