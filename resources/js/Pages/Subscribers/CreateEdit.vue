<template>
    <app-layout>
        <subscribers-add-form></subscribers-add-form>
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'
    import SubscribersAddForm from '../../Components/Subscribers/CreateEdit/Form';

    export default {
        components: {
            AppLayout,
            SubscribersAddForm,
        },
    }
</script>
