<template>
    <v-form
        ref="form"
        v-model="valid"
        lazy-validation
    >
        <v-text-field
            v-model="subscriber.first_name"
            :rules="rules.first_name"
            label="First name"
            required
        />

        <v-text-field
            v-model="subscriber.last_name"
            :rules="rules.last_name"
            label="Last name"
            required
        />

        <v-text-field
            v-model="subscriber.birth_date"
            :rules="rules.birth_date"
            label="Birth date"
            required
        />

        <v-select
            v-model="subscriber.gender_type_id"
            :items="genderTypes"
            :rules="rules.gender_type_id"
            label="Gender"
            required
        ></v-select>

        <v-text-field
            v-model="subscriber.zip_code"
            :rules="rules.zip_code"
            label="Zip code"
            required
        />

        <v-text-field
            v-model="subscriber.city"
            :rules="rules.city"
            label="City"
            required
        />

        <v-text-field
            v-model="subscriber.address"
            :rules="rules.address"
            label="Address"
            required
        />

        <v-btn
            :disabled="!valid"
            color="success"
            class="mr-4 float-right"
            @click="submit"
        >
            <span v-if="this.editMode">
                Update
            </span>
            <span v-else>
                Create
            </span>
        </v-btn>
    </v-form>
</template>

<script>
    export default {
        data: () => ({
            editMode: false,
            valid: true,
            subscriber: {
                first_name: '',
                last_name: '',
                birth_date: '',
                gender_type_id: '',
                zip_code: '',
                city: '',
                address: '',
            },
            rules: {
                first_name: [ v => !!v || 'First name is required' ],
                last_name: [ v => !!v || 'Last name is required' ],
                birth_date: [ v => !!v || 'Birth date is required' ],
                gender_type_id: [ v => !!v || 'Gender is required' ],
                zip_code: [
                    v => !!v || 'Last name is required',
                    v => /\d{2}-\d{3}/.test(v) || 'Zip code must have valid format (XX-XXX)',
                    v => v && v.length <= 6 || 'Zip code must have valid format (XX-XXX)',
                ],
                city: [ v => !!v || 'City is required' ],
                address: [ v => !!v || 'Address is required' ],
            },
        }),
        computed: {
            genderTypes() {
                const genderTypes = [];
                for (const [key, value] of Object.entries(this.$page.genderTypes)) {
                    genderTypes.push({text: value, value: parseInt(key)});
                }
                return genderTypes;
            }
        },
        created() {
          if (this.$page.subscriber) {
              this.subscriber = this.$page.subscriber;
              this.editMode = true;
          }
        },
        methods: {
            submit() {
                if (this.$refs.form.validate()) {
                    if (this.editMode) {
                        this.$inertia.put(`/subscribers/${this.subscriber.id}`, this.subscriber);
                    } else {
                        this.$inertia.post('/subscribers', this.subscriber);
                    }
                }
            },
        },
    }
</script>
