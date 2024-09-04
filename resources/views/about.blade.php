<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <div class="max-w-4xl mx-auto p-6 bg-white shadow-md rounded-lg mt-10">
        <div class="text-center">
            <img src="{{ asset('images/gamal.jpeg') }}" alt="Profile Picture" class="rounded-full mx-auto mb-4 w-36 h-36">
            <h2 class="text-3xl font-bold mt-4">{{$name}}</h2>
            <p class="text-gray-600">Web Developer & Designer</p>
        </div>

        <div class="mt-6">
            <h3 class="text-2xl font-semibold mb-2">About Me</h3>
            <p class="text-gray-700">
                Saya adalah seorang pengembang web dengan keahlian dalam membangun aplikasi web yang responsif dan interaktif. Saya memiliki keterampilan dalam HTML, CSS, JavaScript, PHP, dan framework Laravel. Dengan latar belakang desain dan pengembangan, saya mampu menciptakan solusi digital yang menarik dan fungsional.
            </p>
        </div>

        {{-- <div class="mt-6">
            <h3 class="text-2xl font-semibold mb-2">Gallery</h3>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <div class="relative">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/400x300" alt="Gallery Image 1">
                </div>
                <div class="relative">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/400x300" alt="Gallery Image 2">
                </div>
                <div class="relative">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/400x300" alt="Gallery Image 3">
                </div>
                <div class="relative">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/400x300" alt="Gallery Image 4">
                </div>
                <div class="relative">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/400x300" alt="Gallery Image 5">
                </div>
                <div class="relative">
                    <img class="w-full h-48 object-cover rounded-lg" src="https://via.placeholder.com/400x300" alt="Gallery Image 6">
                </div>
            </div>
        </div> --}}

        <div class="mt-6">
            <h3 class="text-2xl font-semibold mb-2">Skills</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>HTML, CSS, JavaScript</li>
                <li>Laravel, PHP</li>
                <li>Tailwind CSS</li>
                <li>Alpine.js</li>
                <li>UI/UX Design</li>
            </ul>
        </div>

        <div class="mt-6">
            <h3 class="text-2xl font-semibold mb-2">Experience</h3>
            <ul class="list-disc list-inside text-gray-700">
                <li>SDN 1 Kalijati (2013 - 2019)</li>
                <li>Smpn 1 Kalijati (2019 - 2022)</li>
                <li>SMKN 1 Subang (2022 - Present)</li>
            </ul>
        </div>
    </div>
</x-layout>
