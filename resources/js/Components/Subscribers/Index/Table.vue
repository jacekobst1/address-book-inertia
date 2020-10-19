<template>
    <v-data-table
        :items="$page.subscribers"
        :headers="headers"
        item-key="name"
        class="elevation-1"
    >
        <template v-slot:item.buttons>
            <v-btn x-small>
                <v-icon>
                    mdi-pencil
                </v-icon>
            </v-btn>
            <v-btn x-small>
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
            headers: [
                { text: 'First name',    value: 'first_name' },
                { text: 'Last name',     value: 'last_name' },
                { text: 'Birth date',    value: 'birth_date' },
                { text: 'Gender',        value: 'gender' },
                { text: 'Zip code',      value: 'zip_code' },
                { text: 'City',          value: 'city' },
                { text: 'Address',       value: 'address' },
                { text: '',              value: 'buttons' },
            ]
        }),
    }
</script>
