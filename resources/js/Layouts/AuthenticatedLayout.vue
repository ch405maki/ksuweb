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

@vite(['resources/css/app.css', 'resources/js/app.js'])

<template>
            <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
                <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="index3.html" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item d-none d-sm-inline-block">
                            <a href="#" class="nav-link">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                            <i class="fas fa-search"></i>
                            </a>
                            <div class="navbar-search-block">
                                <form class="form-inline">
                                <div class="input-group input-group-sm">
                                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                    <div class="input-group-append">
                                        <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                        </button>
                                        <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                        </button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                            <i class="fas fa-th-large"></i>
                            </a>
                        </li>
                    </ul>
                    </nav>

                    <aside class="main-sidebar sidebar-dark-primary elevation-4">
                        <!-- <a href="index3.html" class="brand-link">
                        <img src="images/logo_1.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                        <span class="brand-text font-weight-light"></span>
                        </a> -->
                    <div class="sidebar">
                        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                            <!-- <div class="image">
                                <img src="" class="img-circle elevation-2" alt="Image">
                            </div> -->
                            <div class="info">
                                <a href="#" class="d-block">Administrator</a>
                            </div>
                        </div>
                        <nav class="mt-2">
                            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                                <li class="nav-item menu-open">
                                <a href="#" class="nav-link active">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                        Home Page
                                        <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="#" class="nav-link active">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Active Page</p>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#" class="nav-link">
                                            <i class="far fa-circle nav-icon"></i>
                                            <p>Inactive Page</p>
                                        </a>
                                    </li>
                                </ul>
                                </li>
                                <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <i class="nav-icon fas fa-th"></i>
                                    <p>
                                        Simple Link
                                        <span class="right badge badge-danger">New</span>
                                    </p>
                                </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    </aside>

            <div class="content-wrapper">
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">Starter Page</h1>
                                </div>
                                    <div class="col-sm-6">
                                    <ol class="breadcrumb float-sm-right">
                                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                                        <li class="breadcrumb-item active">Starter Page</li>
                                    </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Page Content -->
                <main>
                    <div class="content">
                        <div class="container-fluid">
                            <slot name="main" />
                        </div>
                    </div>
                </main>
            </div>

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
