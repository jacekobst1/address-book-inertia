<template>
    <div>
        <nav-link
            v-for="(link, key) in links"
            :key="key"
            :href="link.href"
        >
            <h1>{{ link.text }}</h1>
        </nav-link>
    </div>
</template>

<script>
import NavLink from '../Jetstream/NavLink';

export default {
    name: 'Nav',
    data: () => ({
        links: [
            {text: 'Home', href: '/'},
            {text: 'Subscribers', href: '/subscribers'},
        ]
    }),
    components: {
        NavLink,
    },
}
</script>
