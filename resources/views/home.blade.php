<x-layout>
    <x-slot:title>{{$title}}</x-slot:title>

    <!-- Hero Section -->
    <section class="bg-gray-800 text-white py-20">
        <div class="max-w-7xl mx-auto text-center">
            <img src="{{ asset('images/gamal.jpeg') }}" alt="Profile Picture" class="rounded-full mx-auto mb-4 w-36 h-36">
            <h1 class="text-4xl font-bold">Muhammad Syah Gamal Rosyada</h1>
            <p class="text-xl mt-2">Web Developer & Designer</p>
            <p class="mt-4 max-w-2xl mx-auto">Saya seorang murid SMKN 1 Subang jurusan Rekayasa Perangkat Lunak</p>
            <a href="#contact" class="mt-8 inline-block bg-blue-500 text-white py-2 px-4 rounded-md">Contact Me</a>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-20 bg-white">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10">Skills</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                <div class="text-center">
                    <i class="fab fa-html5 text-4xl text-orange-500"></i>
                    <h3 class="text-xl mt-2">HTML</h3>
                </div>
                <div class="text-center">
                    <i class="fab fa-css3-alt text-4xl text-blue-500"></i>
                    <h3 class="text-xl mt-2">CSS</h3>
                </div>
                <div class="text-center">
                    <i class="fab fa-js text-4xl text-yellow-500"></i>
                    <h3 class="text-xl mt-2">JavaScript</h3>
                </div>
                <div class="text-center">
                    <i class="fab fa-laravel text-4xl text-red-500"></i>
                    <h3 class="text-xl mt-2">Laravel</h3>
                </div>
                <div class="text-center">
                    <i class="fab fa-php text-4xl text-indigo-500"></i>
                    <h3 class="text-xl mt-2">PHP</h3>
                </div>
                <div class="text-center">
                    <i class="fas fa-database text-4xl text-green-500"></i>
                    <h3 class="text-xl mt-2">MySQL</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Projects Section -->
    <section class="py-20 bg-gray-100">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl font-bold text-center mb-10">Recent Projects</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/projekbankmini.png') }}" alt="Project 1" class="rounded-md">
                    <h3 class="text-xl mt-4">Project One</h3>
                    <p class="text-gray-600 mt-2">project bank mini.</p>
                </div>
                <!-- Project 2 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/projeknilai.png') }}" alt="Project 2" class="rounded-md">
                    <h3 class="text-xl mt-4">Project Two</h3>
                    <p class="text-gray-600 mt-2">project penilaian siswa.</p>
                </div>
                <!-- Project 3 -->
                <div class="bg-white p-4 rounded-lg shadow-md">
                    <img src="{{ asset('images/bebas.png') }}" alt="Project 3" class="rounded-md">
                    <h3 class="text-xl mt-4">Project Three</h3>
                    <p class="text-gray-600 mt-2">portofolio profile.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto text-center">
            <h2 class="text-3xl font-bold">Let's Work Together</h2>
            <p class="mt-4">If you have a project in mind or just want to say hello, feel free to get in touch!</p>
            <a href="/contact" class="mt-8 inline-block bg-blue-500 text-white py-2 px-4 rounded-md">Contact Me</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-6">
        <div class="max-w-7xl mx-auto text-center">
            <p>&copy; 2024 Gamal. All rights reserved.</p>
        </div>
    </footer>
</x-layout>
