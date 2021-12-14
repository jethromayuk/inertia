<template>
    <Head title="Users" />

    <h1 class="text-4xl font-bold">Users</h1>

    <Nav />

    <div class="flex flex-col mt-8">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
            <div class="shadow ove
  components: { Pagination },rflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <tbody>
                        <tr v-for="user in users.data" :key="user.id" class="bg-white">
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                                {{ user.name }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                <Link :href="`/users/${user.id}/edit`" class="text-indigo-600 hover:text-indigo-900">Edit</Link>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>

    <!-- Paginate -->
    <Pagination :links="users.links" class="mt-6" />
</template>

<script setup>
import Pagination from "../Shared/Pagination";

defineProps({ users: Object })
</script>
