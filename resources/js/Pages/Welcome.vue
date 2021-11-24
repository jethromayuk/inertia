<template>
    <h1>Hello {{ name }}</h1>

    <p>Frameworks:</p>

    <ul>
        <li v-for="framework of frameworks" v-text="framework" v-bind:key="framework"></li>
    </ul>
</template>

<script>
export default {
    props: {
        name: String,
        frameworks: Array
    }
};
</script>
