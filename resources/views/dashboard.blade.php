<x-app-layout>
    <div class="flex flex-col gap-6 p-4 pl-80"> <!-- Tambahkan padding kiri lebih besar -->
        <!-- Welcome Section -->
        <div class="bg-white p-6 rounded-xl border border-gray-200 shadow-sm">
            <div class="flex flex-row gap-8 justify-center">
                <img src="https://cdn.discordapp.com/attachments/1293646988646154344/1300360404068732971/Untitled-1.png?ex=673ce6bf&is=673b953f&hm=595978227ecb2609f0c89703c4de6285ae6880e4ddfd93ffcc825b0ceefc1334&" alt="logo library" class="w-full max-w-md" />
                <div class="flex flex-col justify-center gap-5 w-1/2">
                    <h1 class="font-extrabold text-2xl my-4">Selamat pagi, {{ auth()->user()->name }}</h1>
                    <p class="my-4">Lorem ipsum dolor sit amet consectetur deylough elit. Dolorem sit boojaynah repudiandae, facere voluptatem enim eaque magni poosay iure facilis illo magnam.</p>
                    <div class="flex gap-4">
                        <a href="#" class="px-4 py-2 bg-gray-400 text-white rounded-2xl hover:bg-black">Baca Buku</a>
                        <a href="#" class="px-4 py-2 bg-[#A78B61] text-white rounded-2xl hover:bg-black">Pinjam Buku</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-6">
            <h1 class="font-extrabold text-2xl mb-2">Info Dashboard Buku</h1>
            <div class="flex flex-row justify-between gap-4 mb-4">
                <p class="text-gray-700">Informasi tentang buku yang sudah dipinjam dan dibaca oleh orang</p>
                <a href="#" class="px-4 py-2 bg-gray-300 text-black rounded-2xl">Kelola</a>
            </div>
        </div>

        <!-- Dashboard Stats -->
        <div class="flex flex-row mt-3 gap-20">
            <div class="bg-[#6E987C] w-full p-10 rounded-2xl shadow-md text-white">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7em" height="7em" viewBox="0 0 24 24"><path fill="currentColor" d="M9 3v15h3V3zm3 2l4 13l3-1l-4-13zM5 5v13h3V5zM3 19v2h18v-2z"/></svg>
                    <h1 class="text-5xl font-bold ml-6">78</h1>
                </div>
                <h3 class="text-center mt-10 text-lg">Total Buku dipinjam</h3>

            </div>

            <div class="bg-[#22615D] w-full p-10 rounded-2xl shadow-md text-white">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7em" height="7em" viewBox="0 0 24 24"><path fill="currentColor" d="M18 22a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2h-6v7L9.5 7.5L7 9V2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2z"/></svg>
                    <h1 class="text-5xl font-bold ml-6">19</h1>
                </div>
                <h3 class="text-center mt-10 text-lg">Sedang dipinjam</h3>
            </div>

            <div class="bg-[#FBC78F] w-full p-10 rounded-2xl shadow-md text-white">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7em" height="7em" viewBox="0 0 24 24"><path fill="currentColor" d="M3 5a4 4 0 0 1 4-4h14v22H7a4 4 0 0 1-4-4zm7.004 0H8v2.004h2.004zm0 3H8v2.004h2.004zM7.5 16a2.5 2.5 0 0 0 0 5H19v-5h-7v3.75l-2-1.345l-2 1.345V16z"/></svg>
                    <h1 class="text-5xl font-bold ml-6">19</h1>
                </div>
                <h3 class="text-center mt-10 text-lg">Buku dikembalikan</h3>
            </div>

            <div class="bg-[#AC455E] w-full p-10 rounded-2xl shadow-md text-white">
                <div class="flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="7em" height="7em" viewBox="0 0 24 24"><path fill="currentColor" d="M13.09 20c.12.72.37 1.39.72 2H6c-1.11 0-2-.89-2-2V4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v9.09c-.33-.05-.66-.09-1-.09s-.67.04-1 .09V4h-5v8l-2.5-2.25L8 12V4H6v16zm9.45-3.12l-1.42-1.41L19 17.59l-2.12-2.12l-1.41 1.41L17.59 19l-2.12 2.12l1.41 1.42L19 20.41l2.12 2.13l1.42-1.42L20.41 19z"/></svg>
                    <h1 class="text-5xl font-bold ml-6">19</h1>
                </div>
                <h3 class="text-center mt-10 text-lg">Buku rusak</h3>
            </div>
        </div>
    </div>
</x-app-layout>
