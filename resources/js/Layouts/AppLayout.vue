<template>
    <div class="min-h-screen bg-gray-100">

        <!-- Page Heading -->
        <header class="bg-white shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <slot name="header">
                  <nav-links></nav-links>
                </slot>
            </div>
        </header>

        <!-- Page Content -->
        <main>
            <slot></slot>
        </main>

        <!-- Modal Portal -->
        <portal-target name="modal" multiple>
        </portal-target>
    </div>
</template>

<script>
    import NavLinks from '../Components/NavLinks';
    import NavLink from '../Jetstream/NavLink';

    export default {
        components: {
            NavLinks,
            NavLink
        },
    }
</script>
