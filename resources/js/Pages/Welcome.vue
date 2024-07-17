<script setup>
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById("screenshot-container")?.classList.add("!hidden");
    document.getElementById("docs-card")?.classList.add("!row-span-1");
    document.getElementById("docs-card-content")?.classList.add("!flex-row");
    document.getElementById("background")?.classList.add("!hidden");
}
</script>

<template>
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
        <div
            class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white"
        >
            <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                <header
                    class="flex items-center gap-2 p-7 overflow-hidden rounded-lg bg-zinc-900 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]"
                >
                    <nav class="flex items-start flex-auto">
                        <Link href="#" class="mr-8">
                            <img
                                class="inline h-8 w-auto mr-4"
                                src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Logo"
                            />
                            <span class="text-xl text-indigo-600"
                                >Berita.com</span
                            >
                        </Link>
                        <ul class="flex items-start space-x-5">
                            <li>
                                <Link
                                    href="#"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Luar Negeri
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="#"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dalam Negeri
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="#"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Politik
                                </Link>
                            </li>
                            <li>
                                <Link
                                    href="#"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Olahraga
                                </Link>
                            </li>
                        </ul>
                    </nav>

                    <nav
                        v-if="canLogin"
                        class="-mx-3 flex flex-auto justify-end"
                    >
                        <Link
                            v-if="$page.props.auth.user"
                            :href="route('dashboard')"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                        >
                            Dashboard
                        </Link>

                        <template v-else>
                            <Link
                                :href="route('login')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Log in
                            </Link>

                            <Link
                                v-if="canRegister"
                                :href="route('register')"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                            >
                                Register
                            </Link>
                        </template>
                    </nav>
                </header>

                <main class="mt-6">
                    <section
                        class="px-6 py-24 sm:py-32 lg:px-8 flex flex-col items-start gap-6 overflow-hidden rounded-lg bg-zinc-900 text-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]"
                    >
                        <div class="mx-auto max-w-2xl lg:max-w-4xl">
                            <img
                                class="mx-auto h-12"
                                src="https://tailwindui.com/img/logos/workcation-logo-indigo-600.svg"
                                alt=""
                            />
                            <figure class="mt-10">
                                <blockquote
                                    class="text-center text-xl font-semibold leading-8 text-white sm:text-2xl sm:leading-9"
                                >
                                    <p>
                                        “Berita.com mengabarkan berita secara
                                        akurat dan tepat”
                                    </p>
                                </blockquote>
                                <figcaption class="mt-10">
                                    <img
                                        class="mx-auto h-10 w-10 rounded-full"
                                        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                        alt=""
                                    />
                                    <div
                                        class="mt-4 flex items-center justify-center space-x-3 text-base"
                                    >
                                        <div
                                            class="font-semibold text-white-900"
                                        >
                                            Judith Black
                                        </div>
                                        <svg
                                            viewBox="0 0 2 2"
                                            width="3"
                                            height="3"
                                            aria-hidden="true"
                                            class="fill-white-600 dark:fill-white-400"
                                        >
                                            <circle cx="2" cy="2" r="5" />
                                        </svg>
                                        <div class="text-white-600">
                                            CEO of Workcation
                                        </div>
                                    </div>
                                </figcaption>
                            </figure>
                        </div>
                    </section>

                    <section class="grid grid-cols-2 gap-6 py-5">
                        <div class="bg-zinc-800 p-6 rounded-lg shadow-md">
                            <h2 class="text-xl font-semibold mb-4">
                                News Card 1
                            </h2>
                            <img
                                class="w-full h-48 object-cover rounded-md border-2 border-gray-500 my-2"
                                src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                alt="News Card Image"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo.
                            </p>
                            <div class="mt-4 flex gap-3">
                                <span
                                    class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"
                                    >Dalam Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"
                                    >Luar Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20"
                                    >Politik</span
                                >
                            </div>
                            <button
                                class="mt-4 px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                            >
                                Read More &rarr;
                            </button>
                        </div>
                        <div class="bg-zinc-800 p-6 rounded-lg shadow-md">
                            <h2 class="text-xl font-semibold mb-4">
                                News Card 1
                            </h2>
                            <img
                                class="w-full h-48 object-cover rounded-md border-2 border-gray-500 my-2"
                                src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                alt="News Card Image"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo.
                            </p>
                            <div class="mt-4 flex gap-3">
                                <span
                                    class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"
                                    >Dalam Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"
                                    >Luar Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20"
                                    >Politik</span
                                >
                            </div>
                            <button
                                class="mt-4 px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                            >
                                Read More &rarr;
                            </button>
                        </div>
                        <div class="bg-zinc-800 p-6 rounded-lg shadow-md">
                            <h2 class="text-xl font-semibold mb-4">
                                News Card 1
                            </h2>
                            <img
                                class="w-full h-48 object-cover rounded-md border-2 border-gray-500 my-2"
                                src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                alt="News Card Image"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo.
                            </p>
                            <div class="mt-4 flex gap-3">
                                <span
                                    class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"
                                    >Dalam Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"
                                    >Luar Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20"
                                    >Politik</span
                                >
                            </div>
                            <button
                                class="mt-4 px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                            >
                                Read More &rarr;
                            </button>
                        </div>
                        <div class="bg-zinc-800 p-6 rounded-lg shadow-md">
                            <h2 class="text-xl font-semibold mb-4">
                                News Card 1
                            </h2>
                            <img
                                class="w-full h-48 object-cover rounded-md border-2 border-gray-500 my-2"
                                src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                                alt="News Card Image"
                            />
                            <p>
                                Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo. Sed euismod, urna id aliquet
                                tincidunt, nunc nisl fringilla nunc, in lacinia
                                nunc urna id justo.
                            </p>
                            <div class="mt-4 flex gap-3">
                                <span
                                    class="inline-flex items-center rounded-md bg-gray-50 px-2 py-1 text-xs font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10"
                                    >Dalam Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-red-50 px-2 py-1 text-xs font-medium text-red-700 ring-1 ring-inset ring-red-600/10"
                                    >Luar Negeri</span
                                >
                                <span
                                    class="inline-flex items-center rounded-md bg-yellow-50 px-2 py-1 text-xs font-medium text-yellow-800 ring-1 ring-inset ring-yellow-600/20"
                                    >Politik</span
                                >
                            </div>
                            <button
                                class="mt-4 px-4 py-2 text-white bg-indigo-600 rounded-md hover:bg-indigo-700"
                            >
                                Read More &rarr;
                            </button>
                        </div>
                    </section>
                </main>

                <footer
                    class="py-10 text-center text-sm text-black dark:text-white/70 bg-zinc-900 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)]"
                >
                    Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </footer>
            </div>
        </div>
    </div>
</template>
