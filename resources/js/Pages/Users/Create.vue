<template>
    <Head title="Create User"></Head>

    <h1 class="text-3xl">Create New User</h1>

    <form action="/" method="POST" class="max-w-md mx-auto mt-8">
        <div class="mb-6">
            <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Name
            </label>

            <input class="border border-gray-400 p-2 w-full"
                type="text"
                name="name"
                id="name"
                required>
        </div>

        <div class="mb-6">
            <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Email
            </label>

            <input class="border border-gray-400 p-2 w-full"
                type="email"
                name="email"
                id="email"
                required>
        </div>

        <div class="mb-6">
            <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">
                Password
            </label>

            <input class="border border-gray-400 p-2 w-full"
                type="password"
                name="password"
                id="password"
                required>
        </div>

        <div class="mb-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>
    </form>
</template>

<script>
export default {}
</script>
