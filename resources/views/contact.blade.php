<x-layout>
    <x-slot:title>Contact</x-slot:title>
    @if(session('success'))
    <div class="bg-green-500 text-white p-4 rounded-md mb-4">
        {{ session('success') }}
    </div>
@endif


    <div class="bg-white p-8 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold mb-6 text-gray-800">Contact</h2>
        
        <p class="text-gray-700 mb-4">
            Saya selalu terbuka untuk diskusi dan kolaborasi baru. Silakan hubungi saya melalui platform berikut:
        </p>
        
        <div class="flex space-x-6 mt-6">
            <!-- Instagram -->
            <a href="https://www.instagram.com/mallinone_" target="_blank" class="text-gray-500 hover:text-pink-600 transition duration-300">
                <i class="fab fa-instagram fa-2x"></i>
            </a>
            
            <!-- YouTube -->
            <a href="https://www.youtube.com/channel/shironeko_4" target="_blank" class="text-gray-500 hover:text-red-600 transition duration-300">
                <i class="fab fa-youtube fa-2x"></i>
            </a>
            
            <!-- WhatsApp -->
            <a href="https://wa.me/085346179631" target="_blank" class="text-gray-500 hover:text-green-600 transition duration-300">
                <i class="fab fa-whatsapp fa-2x"></i>
            </a>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Atau kirim email ke:</h3>
            <p class="text-gray-700">
                <a href="mailto:muhammadsyahgamalrosyada@gmail.com" class="text-indigo-500 hover:underline">muhammadsyahgamalrosyada@gmail.com</a>
            </p>
        </div>

        <div class="mt-8">
            <h3 class="text-xl font-semibold text-gray-800 mb-2">Form Kontak</h3>
            <form action="#" method="POST" class="space-y-4">
                <div>
                    <label for="name" class="block text-gray-700">Nama</label>
                    <input type="text" id="name" name="name" class="w-full mt-1 p-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" id="email" name="email" class="w-full mt-1 p-2 border border-gray-300 rounded-md" required>
                </div>
                <div>
                    <label for="message" class="block text-gray-700">Pesan</label>
                    <textarea id="message" name="message" rows="5" class="w-full mt-1 p-2 border border-gray-300 rounded-md" required></textarea>
                </div>
                <button type="submit" class="px-4 py-2 bg-indigo-500 text-white rounded-md hover:bg-indigo-600 transition duration-300">Kirim</button>
            </form>
        </div>
    </div>
</x-layout>
