<template>
    <Head>
        <title>Users</title>
    </Head>

    <h1 class="text-4xl font-bold">Users</h1>

    <Nav />

    <div style="margin-top: 800px;">
        The current time is {{ time }}

        <Link href="/users" class="text-blue-400" preserve-scroll>Refresh</Link>
    </div>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3'

defineProps({ time: String })
</script>
