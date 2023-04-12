<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

    <template>
        <Head title="Dashboard" />
    
        <AuthenticatedLayout>
        <template #header>
            <slot name="header" />
                <div class="flex items-center justify-between">
                    <img src="images/iso_certification.png" alt="Image Logo" class="max-w-full h-auto">
                </div>
        </template>
    
        <template #main>
    <div class="bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex flex-col md:flex-row w-full justify-center">
                <!--Start main content section -->
                <div class="w-full md:w-2/3 p-2">
                    <div class="w-full flex items-center justify-between">
                        <h1 class="text-gray-800 text-lg font-bold mb-4" style="color: #3d911f; font-weight: bold; font-size: 30px">UNIVERSITY STORIES</h1>
                        <button type="button" class="text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" >
                            <svg class="w-4 h-4 mr-2 -ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 3h6v6M10 14L21 3M15 21H3v-6M4 20h11"></path>
                            </svg>
                            Add Article
                        </button>
                    </div>

                    <hr>
                    <p class="text-gray-600 leading-6">Content here...</p>

                    <!--Start Breadcrumb -->
                    <nav class="bg-grey-light w-full rounded-md" aria-label="breadcrumb">
                        <ol class="list-reset flex">
                            <li>
                                <a href="#" class="text-neutral-500 hover:text-neutral-600 dark:text-neutral-200">Home</a>
                            </li>
                            <li>
                                <span class="mx-2 text-neutral-500 dark:text-neutral-200">/</span>
                            </li>
                        </ol>
                    </nav>
                    <!--end Breadcrumb -->
                </div>
                <!--End main content section -->

                    <!--Start announcement section -->
                    <div class="w-full md:w-1/3 p-2 flex justify-start items-center">
                        <div class="text-left">
                        <h2 class="text-gray-800 text-lg font-semibold mb-4">Announcement Section</h2>
                        <p class="text-gray-600 leading-6">Content here...</p>
                        </div>
                    </div>
                    <!--End announcement section -->
                    </div>
                </div>
            </div>
        </template>

        <template #footer>
            <!--footer Section -->
        </template>

        </AuthenticatedLayout>
    </template>

<style>

</style>