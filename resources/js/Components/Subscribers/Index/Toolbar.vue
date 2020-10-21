<template>
    <v-toolbar flat>
        <v-text-field
            label="Search"
            hide-details="auto"
        >
            <v-icon slot="append">
                mdi-magnify
            </v-icon>
        </v-text-field>
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
        name: 'SubscribersIndexToolbar'
    }
</script>
