<template>
    <Layout>
        <h1 class="text-4xl font-bold">Home</h1>

        <Nav />

        <div style="margin-top: 800px;">
            The current time is {{ time }}

            <Link href="/users" class="text-blue-400" preserve-scroll>Refresh</Link>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout";
import { Link } from "@inertiajs/inertia-vue3";
</script>
