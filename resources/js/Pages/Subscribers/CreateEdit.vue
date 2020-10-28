<template>
    <app-layout>
        <subscribers-toolbar class="mb-3" />
        <subscribers-form />
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'
    import SubscribersToolbar from "../../Components/Subscribers/CreateEdit/Toolbar";
    import SubscribersForm from '../../Components/Subscribers/CreateEdit/Form';

    export default {
        components: {
            AppLayout,
            SubscribersToolbar,
            SubscribersForm,
        },
    }
</script>
