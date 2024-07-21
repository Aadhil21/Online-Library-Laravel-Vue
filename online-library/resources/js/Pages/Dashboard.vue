<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import { ref } from 'vue';
import OnlineLibrary from '../Components/OnlineLibrary.vue';
import MyLibrary from '../Components/MyLibrary.vue';

const activeTab = ref('online-library');

</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Dashboard</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div>
                        <div class="tabs flex flex-row">
                            <button @click="activeTab = 'online-library'" :class="{ 'active bg-indigo-700': activeTab === 'online-library', 'bg-indigo-300 hover:bg-indigo-700 p-5 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight basis-1/2':true}">Online Library</button>
                            <button @click="activeTab = 'my-library'" :class="{ 'active bg-indigo-700': activeTab === 'my-library', 'bg-indigo-300 p-5 hover:bg-indigo-700 font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight basis-1/2':true }">My Library</button>
                            </div>
                            <div class="tab-content">
                            <div v-if="activeTab === 'online-library'">
                                <!-- Online Library Content -->
                                <OnlineLibrary />
                            </div>
                            <div v-if="activeTab === 'my-library'">
                                <!-- My Library Content -->
                                <MyLibrary />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>