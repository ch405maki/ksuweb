<script setup>
import { ref } from 'vue';
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
import NavLink from '@/Components/NavLink.vue';
import ResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import { Link } from '@inertiajs/vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
                <nav style="background-color: #a00205;">
                <!-- Primary Navigation Menu -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-12">
                        <div class="flex">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center" style="background-color: #a00205; color:white;">
                                <Link :href="route('dashboard')">
                                    <!-- <ApplicationLogo
                                        class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"
                                    /> -->
                                    <b>KSU</b>
                                </Link>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>ABOUT</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>ADMINISTRATION</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>ACADEMICS</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>RDET</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>SERVICES</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>ALUMNI</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>

                            <div class="hidden sm:flex sm:items-center sm:ml-6">
                                <!-- Settings Dropdown -->
                                <div class="ml-3 relative">
                                    <Dropdown align="right" width="48">
                                        <template #trigger>
                                            <span class="inline-flex rounded-md">
                                                <button
                                                    type="button"
                                                    style="background-color: #a00205; color:white;"
                                                    class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150"
                                                >
                                                <b>GOOD GOVERNANCE</b>
                                                    <svg
                                                        class="ml-2 -mr-0.5 h-4 w-4"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        viewBox="0 0 20 20"
                                                        fill="currentColor"
                                                    >
                                                        <path
                                                            fill-rule="evenodd"
                                                            d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"
                                                        />
                                                    </svg>
                                                </button>
                                            </span>
                                        </template>

                                        <template #content>
                                            <DropdownLink :href="route('profile.edit')"> Item </DropdownLink>
                                        </template>
                                    </Dropdown>
                                </div>
                            </div>
                        </div>

                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button
                                @click="showingNavigationDropdown = !showingNavigationDropdown"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out"
                            >
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{
                                            hidden: showingNavigationDropdown,
                                            'inline-flex': !showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"
                                    />
                                    <path
                                        :class="{
                                            hidden: !showingNavigationDropdown,
                                            'inline-flex': showingNavigationDropdown,
                                        }"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"
                                    />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Responsive Navigation Menu -->
                <div
                    :class="{ block: showingNavigationDropdown, hidden: !showingNavigationDropdown }"
                    class="sm:hidden"
                >
                    <div class="text-white bg-black">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')" style="background-color: #a00205; color:white;">
                            Item
                        </ResponsiveNavLink>
                    </div>
                    <div class="pt-2 pb-3 space-y-1">
                        <ResponsiveNavLink :href="route('dashboard')" :active="route().current('dashboard')" style="background-color: #a00205; color:white;">
                            Item
                        </ResponsiveNavLink>
                    </div>
                </div>
            </nav>

            <!-- Page Heading -->
            <header class="bg-white dark:bg-gray-800 shadow" v-if="$slots.header">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    <div class="flex items-center justify-between">
                        <img src="images/logo_1.png" alt="Image Logo" class="max-w-full h-auto">
                    </div>
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot name="main" />
            </main>

            <!-- Page Footer -->

            <footer class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                <footer class=" max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 bg-neutral-100 text-center dark:bg-neutral-600 lg:text-center">
                    <div class="container p-6">
                        <div class="grid md:grid-cols-2 lg:grid-cols-4">
                            <div class="mb-6">
                                <h5
                                class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                                Links
                                </h5>

                                <ul class="mb-0 list-none">
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 1</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 2</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 3</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 4</a
                                    >
                                </li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h5
                                class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                                Links
                                </h5>

                                <ul class="mb-0 list-none">
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 1</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 2</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 3</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 4</a
                                    >
                                </li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h5
                                class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                                Links
                                </h5>

                                <ul class="mb-0 list-none">
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 1</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 2</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 3</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 4</a
                                    >
                                </li>
                                </ul>
                            </div>

                            <div class="mb-6">
                                <h5
                                class="mb-2.5 font-bold uppercase text-neutral-800 dark:text-neutral-200">
                                Links
                                </h5>

                                <ul class="mb-0 list-none">
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 1</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 2</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 3</a
                                    >
                                </li>
                                <li>
                                    <a href="#!" class="text-neutral-800 dark:text-neutral-200"
                                    >Link 4</a
                                    >
                                </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <slot name="footer" />
            </footer>

        </div>
</template>
