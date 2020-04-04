@extends('_layouts.master')

@section('body')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.0.1/dist/alpine.js" defer></script>

<div class="relative bg-gray-50 overflow-hidden">
    <div class="hidden sm:block sm:absolute sm:inset-y-0 sm:h-full sm:w-full">
        <div class="relative h-full max-w-screen-xl mx-auto">
            <svg class="absolute right-full transform translate-y-1/4 translate-x-1/4 lg:translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="f210dbf6-a58d-4871-961e-36d5016a0f49" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#f210dbf6-a58d-4871-961e-36d5016a0f49)" />
            </svg>
            <svg class="absolute left-full transform -translate-y-3/4 -translate-x-1/4 md:-translate-y-1/2 lg:-translate-x-1/2" width="404" height="784" fill="none" viewBox="0 0 404 784">
                <defs>
                    <pattern id="5d0dd344-b041-4d26-bec4-8d33ea57ec9b" x="0" y="0" width="20" height="20" patternUnits="userSpaceOnUse">
                        <rect x="0" y="0" width="4" height="4" class="text-gray-200" fill="currentColor" />
                    </pattern>
                </defs>
                <rect width="404" height="784" fill="url(#5d0dd344-b041-4d26-bec4-8d33ea57ec9b)" />
            </svg>
        </div>
    </div>

    <div class="mt-10 mx-auto max-w-screen-xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 xl:mt-28">
        <div class="text-center">
            <h2 class="text-4xl tracking-tight leading-10 font-extrabold text-gray-900 sm:text-5xl sm:leading-none md:text-6xl">
                About
                <span class="text-indigo-600">Us</span>
            </h2>
            <p class="mt-3 max-w-md mx-auto text-base text-gray-500 sm:text-lg md:mt-5 md:text-xl md:max-w-3xl">
                Growing Charlotte's tech community by bringing together developers of all skill levels and interests.
            </p>
            <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                <div class="rounded-md shadow">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline-indigo transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Join Our Slack
                    </a>
                </div>
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                    <a href="#" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-indigo-600 bg-white hover:text-indigo-500 focus:outline-none focus:shadow-outline-blue transition duration-150 ease-in-out md:py-4 md:text-lg md:px-10">
                        Meetup Events
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-12 bg-white">
    <div class="max-w-screen-xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
            <p class="text-base leading-6 text-indigo-600 font-semibold tracking-wide uppercase">Transactions</p>
            <h3 class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl sm:leading-10">
                A better way to send money
            </h3>
            <p class="mt-4 max-w-2xl text-xl leading-7 text-gray-500 lg:mx-auto">
                Lorem ipsum dolor sit amet consect adipisicing elit. Possimus magnam voluptatum cupiditate veritatis in accusamus quisquam.
            </p>
        </div>

        <div class="mt-10">
            <ul class="md:grid md:grid-cols-2 md:col-gap-8 md:row-gap-10">
                <li>
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 font-medium text-gray-900">Competitive exchange rates</h5>
                            <p class="mt-2 text-base leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 md:mt-0">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 font-medium text-gray-900">No hidden fees</h5>
                            <p class="mt-2 text-base leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 md:mt-0">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 font-medium text-gray-900">Transfers are instant</h5>
                            <p class="mt-2 text-base leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </p>
                        </div>
                    </div>
                </li>
                <li class="mt-10 md:mt-0">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h5 class="text-lg leading-6 font-medium text-gray-900">Mobile notifications</h5>
                            <p class="mt-2 text-base leading-6 text-gray-500">
                                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                            </p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="max-w-screen-xl mx-auto">
        <div class="flex flex-wrap items-start justify-center">
            <div class="text-center my-6 px-4 max-w-xs w-1/2 sm:w-1/3">
                <img class="mx-auto rounded-full" src="//dummyimage.com/200/c/a" alt="Person Name">
                <p>John Epperson</p>
                <p>Founder</p>
                <p>RockAgile</p>
            </div>

            <div class="text-center my-6 px-4 max-w-xs w-1/2 sm:w-1/3">
                <img class="mx-auto rounded-full" src="//dummyimage.com/200/c/a" alt="Person Name">
                <p>Tammy Robinson</p>
                <p>Staff</p>
                <p>Tighten</p>
            </div>

            <div class="text-center my-6 px-4 max-w-xs w-1/2 sm:w-1/3">
                <img class="mx-auto rounded-full" src="//dummyimage.com/200/c/a" alt="Person Name">
                <p>Joshua Lawson</p>
                <p>Staff</p>
                <p>Skookum</p>
            </div>
        </div>
    </div>
</div>
@endsection