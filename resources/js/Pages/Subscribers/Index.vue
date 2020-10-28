<template>
    <app-layout>
        <subscribers-toolbar class="mb-3" />
        <subscribers-table />
    </app-layout>
</template>

<script>
    import AppLayout from './../../Layouts/AppLayout'
    import SubscribersToolbar from '../../Components/Subscribers/Index/Toolbar';
    import SubscribersTable from '../../Components/Subscribers/Index/Table';

    export default {
        components: {
            AppLayout,
            SubscribersToolbar,
            SubscribersTable,
        },
    }
</script>
