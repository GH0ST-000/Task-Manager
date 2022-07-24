
<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

</script>
<template>
    <AppLayout title="Todo">
        <div class="border max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <form class="px-4 py-4">
                <div class="w-1/2 mx-auto">
                    <span class="text-xs text-gray-900 ml-4">Todo Name</span>
                    <input type="text" class="w-full rounded-md mt-2" placeholder=" Todo Name">
                </div>
            </form>
        </div>
    </AppLayout>
</template>



<style scoped>

</style>
