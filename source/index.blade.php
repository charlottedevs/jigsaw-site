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
                Charlotte
                <br class="xl:hidden" />
                <span class="text-indigo-600">Devs</span>
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
    <div class="max-w-xl mx-auto px-4 sm:px-6 lg:max-w-screen-xl lg:px-8">
        <div class="lg:grid lg:grid-cols-3 lg:gap-8">
            <div>
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h5 class="text-lg leading-6 font-medium text-gray-900">Emerging Developers</h5>
                    <p class="mt-2 text-base leading-6 text-gray-500">
                        There are many roads that lead to becoming a developer. The Charlotte Developers community includes people who are approaching development from a wide range of backgrounds including 4-year degrees, coding bootcamps, and self-teaching. In this group you will have a place to ask questions and find guidance on everything from coding to interview prep.
                    </p>
                </div>
            </div>
            <div class="mt-10 lg:mt-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 6l3 1m0 0l-3 9a5.002 5.002 0 006.001 0M6 7l3 9M6 7l6-2m6 2l3-1m-3 1l-3 9a5.002 5.002 0 006.001 0M18 7l3 9m-3-9l-6-2m0-2v2m0 16V5m0 16H9m3 0h3" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h5 class="text-lg leading-6 font-medium text-gray-900">Junior Developers</h5>
                    <p class="mt-2 text-base leading-6 text-gray-500">
                        In your first few years working as a developer it is vital to keep networking, learning, and growing. This community is a great place to stay connected with the Charlotte area tech community.
                    </p>
                </div>
            </div>
            <div class="mt-10 lg:mt-0">
                <div class="flex items-center justify-center h-12 w-12 rounded-md bg-indigo-500 text-white">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                    </svg>
                </div>
                <div class="mt-5">
                    <h5 class="text-lg leading-6 font-medium text-gray-900">Senior Developers & Mentors</h5>
                    <p class="mt-2 text-base leading-6 text-gray-500">
                        If you're an experienced developer, this group is a great place for you to give back to the Charlotte area tech community. Remember, teaching is one of the best ways to keep learning!
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-white">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
        <p class="text-center text-base leading-6 font-semibold uppercase text-gray-600 tracking-wider">
            Charlotte Devs extends a big thank you to all of<br> our sponsors, past and present!
        </p>
        <div class="mt-6 grid grid-cols-2 gap-0.5 md:grid-cols-3 lg:mt-8">
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/skookum.png" alt="Skookum" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/levvel.png" alt="Levvel" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/teksystems.png" alt="Teksystems" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/qcbytes.png" alt="Queen City Bytes" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/sigconsult.png" alt="Signature Consultants" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/clarity-insights.png" alt="Clarity Insights" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/tech-incubator.png" alt="Tech Incubator at Knowledge Park" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/accrue-partners.png" alt="Accrue Partners" />
            </div>
            <div class="col-span-1 flex justify-center py-8 px-8 bg-gray-50">
                <img class="max-h-14" src="/assets/images/sponsors/wrayward.png" alt="Wray Ward" />
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-800">
    <div class="max-w-screen-xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
        <div>
            <h2 class="text-3xl leading-9 font-extrabold tracking-tight text-white sm:text-4xl sm:leading-10">
                Want to support Charlotte Devs?
            </h2>
            <p class="mt-3 max-w-2xl text-lg leading-8 text-gray-200">
                If you’d like to support Charlotte Devs, consider contributing to our OpenCollective so that we can continue providing free events to Charlotte's tech community.
            </p>
        </div>
        <div class="mt-8 flex lg:flex-shrink-0 lg:mt-0">
            <div class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base leading-6 font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:shadow-outline transition duration-150 ease-in-out">
                    Become A Contributor
                </a>
            </div>
        </div>
    </div>
</div>
@endsection
