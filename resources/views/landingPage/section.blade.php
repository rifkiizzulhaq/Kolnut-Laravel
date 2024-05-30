@extends('layouts.theme')
@section('content')
    <section class="px-20 pb-2 w-full">
        <div class="pt-10">
            <div class="flex justify-between items-center">
                <div class="w-[50rem]">
                    <p class="text-6 font-extrabold cursor-default">Optimalkan Diet Anda Untuk Kesehatan Kolesterol</p>
                </div>
                <div>
                    <div class="flex items-center justify-center">
                        <img class="h-[12rem]" src="{{ asset('/image/panah.svg') }}" alt="panah">
                        <div class="flex items-center">
                            <h1 class="rotate-90 text-sm cursor-default">scroll down</h1>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-between mt-4">
                <div class="w-[35rem]">
                    <img class="h-[20rem] rounded-md" src="{{ asset('/image/robot.jpg') }}" alt="Robot">
                </div>
                <div class="flex flex-col justify-between w-[55rem]">
                    <div>
                        <h1 class="text-4xl font-extrabold w-[38rem] cursor-default">Menggunakan AI mutakhir 
                            untuk mempersonalisasi nutrisi 
                            dan meminimalkan biaya bagi 
                            penderita kolesterol.
                        </h1>
                    </div>
                    <div class="flex justify-between h-[5rem] w-[38rem]">
                        <div class="flex items-end w-[10rem]">
                            <h1 class="font-semibold cursor-default">Tetap sehat di
                                mana saja
                            </h1>
                        </div>
                        <div class="flex items-end w-[10rem]">
                            <h1 class="font-semibold cursor-default">100k+ makanan 
                                dipindai
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-20 py-[5.5rem] bg-kuning w-full">
        <div>
            <div class="flex items-center">
                <div class="w-[50rem]">
                    <h1 class="text-4xl font-extrabold cursor-default">
                        Kolesterol merupakan faktor risiko 
                        utama penyakit kardiovaskular. 
                        Platform kami didedikasikan untuk 
                        membantu Anda mengelola kadar 
                        kolesterol Anda, memberikan rekomendasi 
                        nutrisi yang dipersonalisasi melalui 
                        teknologi deteksi AI mutakhir.
                    </h1>
                </div>
                <div class="flex justify-end w-1/2">
                    <img class="h-[20rem] w-[20rem]" src="{{ asset('image/healty_food.png') }}" alt="Healty">
                </div>
            </div>
        </div>
        <div class="flex justify-between items-center h-[5rem]">
            <div class="bg-black h-[1px] w-1/2"></div>
            <div class="flex justify-center w-[7rem]">
                <h1 class="font-semibold text-lg cursor-default">VISI KAMI</h1>
            </div>
            <div class="bg-black h-[1px] w-1/2"></div>
        </div>
        <div>
            <div class="flex">
                <div class="w-1/2">
                    <img class="h-[20rem] w-[20rem]" src="{{ asset('image/doctor.png') }}" alt="">
                </div>
                <div class="flex justify-center items-center w-1/2">
                    <h1 class="text-4xl font-extrabold cursor-default">
                        Kami berdedikasi untuk menyediakan informasi, 
                        sumber daya, dan dukungan komprehensif 
                        untuk membantu Anda mengelola kadar 
                        kolesterol secara efektif.
                    </h1>
                </div>
            </div>
        </div>
    </section>
    <section class="px-20 py-[5.5rem] w-full">
        <div class="">
            <div class="flex justify-center h-[8rem] ">
                <h1 class="text-3xl font-bold cursor-default">Mengapa memilih kami ?</h1>
            </div>
            <div class="flex flex-col justify-center  ">
                <div class="flex flex-col justify-between h-[27rem] ">
                    <div class="flex h-[10rem] ">
                        <div class="flex justify-center items-center w-1/2 ">
                            <div class="flex w-[30rem] h-[9rem] justify-between ">
                                <div class="">
                                    <img class="w-[80px]" src="{{ asset('image/bintang.png') }}" alt="">
                                </div>
                                <div class="flex flex-col justify-between w-[23rem] ">
                                    <div>
                                        <h1 class="font-bold text-lg cursor-default">Efektif</h1>
                                    </div>
                                    <div class="cursor-default">
                                        Maksimalkan penghematan Anda dengan 
                                        meminimalkan biaya belanjaan tanpa 
                                        mengorbankan nutrisi dengan rekomendasi
                                        kami yang didukung AI.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center w-1/2 ">
                            <div class="flex w-[30rem] h-[9rem] justify-between ">
                                <div class="">
                                    <img class="w-[80px]" src="{{ asset('image/kamui.png') }}" alt="">
                                </div>
                                <div class="flex flex-col justify-between w-[23rem] ">
                                    <div>
                                        <h1 class="font-bold text-lg cursor-default">Mudah Digunakan</h1>
                                    </div>
                                    <div class="cursor-default">
                                        Pindai makanan apa pun dengan ponsel
                                        cerdas Anda dan dapatkan saran diet instan
                                        yang dipersonalisasi untuk manajemen 
                                        kolesterol.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex h-[10rem] ">
                        <div class="flex justify-center items-center w-1/2 ">
                            <div class="flex w-[30rem] h-[9rem] justify-between ">
                                <div class="">
                                    <img class="w-[80px]" src="{{ asset('image/gear.png') }}" alt="">
                                </div>
                                <div class="flex flex-col justify-between w-[23rem] ">
                                    <div>
                                        <h1 class="font-bold text-lg cursor-default">Berbasis Teknologi</h1>
                                    </div>
                                    <div class="cursor-default">
                                        Menggunakan Teknologi AI 
                                        untuk memberikan rekomendasi
                                        diet yang dipersonalisasi untuk
                                        membantu Anda mengelola kadar kolesterol
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-center items-center w-1/2 ">
                            <div class="flex w-[30rem] h-[9rem] justify-between ">
                                <div class="">
                                    <img class="w-[80px]" src="{{ asset('image/muter.png') }}" alt="">
                                </div>
                                <div class="flex flex-col justify-between w-[23rem] ">
                                    <div>
                                        <h1 class="font-bold text-lg cursor-default">Dapat Diandalkan</h1>
                                    </div>
                                    <div class="cursor-default">
                                        Didukung oleh penelitian ilmiah, rekomendasi
                                        kami dirancang untuk membantu Anda
                                        mengelola kadar kolesterol Anda dengan
                                        aman.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-20 py-[5.5rem] w-full">
        <div>
            <div>
                <h1 class="font-bold text-3xl">Layanan Kami</h1>
            </div>
            <div class="flex justify-between mt-20">
                <div>
                    <img src="{{ asset('image/objek.png') }}" alt="objek">
                    <div class="flex flex-col justify-between w-[20rem] h-[15rem] py-3">
                        <h1 class="font-bold text-lg">AI Detection</h1>
                        <p>Kami menggunakan teknologi deteksi
                            AI mutakhir untuk memberikan rekomendasi
                            makanan yang dipersonalisasi berdasarkan 
                            kadar kolesterol Anda, membantu Anda 
                            membuat pilihan makanan sehat dan 
                            mengelola kolesterol Anda.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('image/alat.png') }}" alt="alat">
                    <div class="flex flex-col justify-between w-[20rem] h-[15rem] py-3">
                        <h1 class="font-bold text-lg">Manajemen Kolesterol</h1>
                        <p>Kami menyediakan layanan manajemen 
                            kolesterol yang dipersonalisasi untuk membantu 
                            Anda mencapai kesehatan optimal melalui
                            pengujian lanjutan, rencana perawatan yang 
                            disesuaikan, pemantauan berkelanjutan, dan 
                            dukungan.
                        </p>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('image/nutrisi.png') }}" alt="nutrisi">
                    <div class="flex flex-col justify-between w-[20rem] h-[15rem] py-3">
                        <h1 class="font-bold text-lg">Nutrisi yang dipersonalisasi</h1>
                        <p>Kami menawarkan rencana nutrisi yang 
                            dipersonalisasi dan disesuaikan dengan 
                            kebutuhan unik Anda, termasuk penilaian 
                            nutrisi, konseling diet, dan dukungan 
                            berkelanjutan untuk membantu Anda 
                            mempertahankan kebiasaan makan 
                            yang sehat.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-20 py-[5.5rem] bg-kuning w-full">
        <div class="flex flex-col justify-between h-[35rem]">
            <div class="flex justify-center">
                <h1 class="font-bold text-4xl">Hasil Nyata dari Pengguna Asli</h1>
            </div>
            <div class="flex justify-between">
                <div class="flex flex-col justify-between items-center py-10 rounded-3xl bg-black w-[25rem] h-[28rem]">
                    <div class="flex flex-col justify-between items-center h-[13rem]">
                        <div>
                            <img class="w-[80px] h-[80px]" src="{{ asset('image/profil_john.png') }}" alt="john">
                        </div>
                        <div class="px-5">
                            <h1 class="text-white">
                                "Pemindai AI secara tepat mengidentifikasi 
                                kebutuhan diet saya, memungkinkan pilihan
                                yang lebih sehat dan hasil nyata dalam 
                                kadar kolesterol saya."
                            </h1>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between items-center h-16">
                        <div>
                            <h1 class="text-white font-semibold">Jhon Smith</h1>
                        </div>
                        <div>
                            <h1 class="text-white font-semibold">Pelatih Kebugaran</h1>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between items-center py-10 rounded-3xl bg-black w-[25rem] h-[28rem]">
                    <div class="flex flex-col justify-between items-center h-[13rem]">
                        <div>
                            <img class="w-[80px] h-[80px]" src="{{ asset('image/profil_alex.png') }}" alt="john">
                        </div>
                        <div class="px-5">
                            <h1 class="text-white">
                                "Mengoptimalkan diet saya untuk kolesterol 
                                tidak pernah semudah ini. Pemindai AI 
                                adalah pengubah permainan, membuat 
                                makan sehat menjadi terjangkau."
                            </h1>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between items-center h-16">
                        <div>
                            <h1 class="text-white font-semibold">Alex Jhonson</h1>
                        </div>
                        <div>
                            <h1 class="text-white font-semibold">Penggemar Kesehatan</h1>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between items-center py-10 rounded-3xl bg-black w-[25rem] h-[28rem]">
                    <div class="flex flex-col justify-between items-center h-[13rem]">
                        <div>
                            <img class="w-[80px] h-[80px]" src="{{ asset('image/profil_emili.png') }}" alt="john">
                        </div>
                        <div class="px-5">
                            <h1 class="text-white">
                                "Setelah menggunakan layanan ini, kadar 
                                kolesterol saya meningkat secara signifikan, 
                                dan biaya makanan saya menurun.
                                Sangat dianjurkan."
                            </h1>
                        </div>
                    </div>
                    <div class="flex flex-col justify-between items-center h-16">
                        <div>
                            <h1 class="text-white font-semibold">Emily Zhang</h1>
                        </div>
                        <div>
                            <h1 class="text-white font-semibold">Pelatih Kebugaran</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="px-20 pt-[5.5rem] bg-kuning w-full">
        <div>
            <div>
                <div>
                    <div class="w-[10rem]">
                        <h1 class="text-6 font-bold">
                            Bergabunglah 
                            dengan 
                            Komunitas 
                            Kami
                        </h1>
                    </div>
                    <div class="flex justify-end items-end h-[5rem]">
                        <h1 class="font-medium">Kebijakan Privasi</h1>
                    </div>
                    <div class="flex items-center h-[2rem]">
                        <div class="w-full h-[1px] bg-black"></div>
                    </div>
                    <div class="flex justify-between items-end h-[12rem]">
                        <div class="flex justify-between h-[10rem] w-full">
                            <div>
                                <h1 class="font-bold text-xl">KOLNUT</h1>
                            </div>
                            <div class="flex justify-between w-[18rem]">
                                <div class="flex flex-col justify-between h-[8rem]">
                                    <div>
                                        <h1 class="font-medium">Home</h1>
                                    </div>
                                    <div>
                                        <h1 class="font-medium">About</h1>
                                    </div>
                                    <div>
                                        <h1 class="font-medium">Feature</h1>
                                    </div>
                                    <div>
                                        <h1 class="font-medium">Testimonial</h1>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-between">
                                    <div class="flex flex-col justify-between h-[6rem]">
                                        <div>
                                            <h1 class="font-semibold">Hubungi Kami</h1>
                                        </div>
                                        <div>
                                            <h1>+628956988583</h1>
                                        </div>
                                        <div>
                                            <h1>Kolnut@polindra.ac.id</h1>
                                        </div>
                                    </div>
                                    <div class="flex justify-between w-[7rem]">
                                        <div>
                                            <img class="w-[30px] h-[30px]" src="{{ asset('image/twitter.png') }}" alt="twitter">
                                        </div>
                                        <div>
                                            <img class="w-[30px] h-[30px]" src="{{ asset('image/facebook.png') }}" alt="facebook">
                                        </div>
                                        <div>
                                            <img class="w-[30px] h-[30px]" src="{{ asset('image/instagram.png') }}" alt="instagram">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center h-[2rem]">
                        <div class="w-full h-[1px] bg-black"></div>
                    </div>
                    <div class="flex justify-center items-center h-10">
                        <h1 class="font-medium cursor-default">© 2024 Kolnut. Seluruh hak cipta dilindungi undang-undang</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection