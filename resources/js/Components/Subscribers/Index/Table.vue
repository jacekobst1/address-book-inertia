<template>
    <v-data-table
        :items="$page.subscribers"
        :headers="headers"
        item-key="name"
        class="elevation-1"
        :search="search"
    >
        <template v-slot:top>
            <v-text-field
                v-model="search"
                label="Search"
                class="mx-4 pt-5"
            ></v-text-field>
        </template>
        <template v-slot:item.buttons="{ item }" >
            <inertia-link :href="'/subscribers/' + item.id">
                <v-btn
                    color="yellow"
                    small
                >
                    <v-icon>
                        mdi-pencil
                    </v-icon>
                </v-btn>
            </inertia-link>
            <v-btn
                color="error"
                small
                @click="deleteSubscriber(item.id)"
            >
                <v-icon>
                    mdi-delete
                </v-icon>
            </v-btn>
        </template>
    </v-data-table>
</template>

<script>
    export default {
        name: 'SubscribersIndexTable',
        data: () => ({
            search: '',
            headers: [
                { text: 'Last name',     value: 'last_name' },
                { text: 'First name',    value: 'first_name' },
                { text: 'Birth date',    value: 'birth_date' },
                { text: 'Gender',        value: 'gender' },
                { text: 'Zip code',      value: 'zip_code' },
                { text: 'City',          value: 'city' },
                { text: 'Address',       value: 'address' },
                { text: '',              value: 'buttons' },
            ]
        }),
        methods: {
            deleteSubscriber(subscriberId) {
                if (confirm('Are you sure you want to delete this subscriber?')) {
                    this.$inertia.delete(`/subscribers/${subscriberId}`);
                }
            }
        }
    }
</script>
