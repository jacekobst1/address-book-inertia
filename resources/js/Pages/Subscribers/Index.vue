<template>
    <app-layout>
        <subscribers-index-toolbar class="mb-12" />
        <subscribers-index-table />
    </app-layout>
</template>

<script>
import AppLayout from './../../Layouts/AppLayout'
import SubscribersIndexToolbar from '../../Components/Subscribers/Index/Toolbar';
import SubscribersIndexTable from '../../Components/Subscribers/Index/Table';

export default {
    components: {
        AppLayout,
        SubscribersIndexToolbar,
        SubscribersIndexTable,
    },
}
</script>
