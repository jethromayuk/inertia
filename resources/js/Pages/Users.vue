<template>
    <h1 class="text-4xl font-bold">Users</h1>

    <Nav />

    <div style="margin-top: 800px;">
        The current time is {{ time }}

        <Link href="/users" class="text-blue-400" preserve-scroll>Refresh</Link>
    </div>
</template>

<script>
import Layout from "../Shared/Layout";

export default {
    layout: Layout,
    props: {
        time: String
    }
};
</script>
