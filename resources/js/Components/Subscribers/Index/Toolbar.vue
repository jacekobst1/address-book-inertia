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
        <v-btn>
            <v-icon class="mr-2">
                mdi-plus
            </v-icon>
            Add new
        </v-btn>
    </v-toolbar>
</template>

<script>
    export default {
        name: 'SubscribersIndexToolbar'
    }
</script>
