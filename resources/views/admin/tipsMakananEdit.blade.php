@
@extends('layouts.theme1')
@section('content')
    <div>
        {{-- @if ($errors->any())
            <div class="bg-red-500 rounded-md p-2 mb-5">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li class="text-white">{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}
        <!-- Card -->
        <div class="flex flex-col">
            <div class="-m-1.5 overflow-x-auto">
                <div class="p-1.5 min-w-full inline-block align-middle">
                <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-slate-100 dark:border-neutral-700">
                    <!-- Header -->
                    <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                        <!-- Input -->
                        <div>
                            {{-- <h1 class="text-white">asdasd</h1> --}}
                            <a href="{{ route('tips-makanan') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                                </svg>
                                Kembali
                            </a>
                        </div>
                        <!-- End Input -->
                    </div>
                    <!-- End Header -->
                    <form action="{{ route('tips-makanan.update', $tipsMakanan->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div>
                            <div>
                                <div class="py-5 px-6">
                                    <div class="w-[30rem]">
                                        <div class="pb-2">
                                            <h1 class="text-black">Gambar</h1>
                                        </div>
                                        <div class="max-w-sm">
                                            <label for="file-input" class="sr-only">Pilih File</label>
                                            <input type="file" name="gambar" id="file-input" class="block w-full file:text-white file:bg-blue-500 border border-gray-200 shadow-sm rounded-lg text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400
                                                file:border-0
                                                    file:me-4
                                                    file:py-3 file:px-4
                                                dark:file:bg-blue-500 dark:file:text-white">
                                            {{-- <div class="mt-2 text-sm text-gray-600">{{ $tipsMakanan->gambar ? $tipsMakanan->gambar : 'Tidak ada file yang dipilih' }}</div> --}}
                                        </div>
                                        @error('gambar')
                                            <div class="text-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="py-5 px-6">
                                    <div class="pb-2">
                                        <h1 class="text-black">Judul</h1>
                                    </div>
                                    <div class="max-w-sm">
                                        <label for="textarea-email-label" class="sr-only">Comment</label>
                                        <textarea name="judul" rows="3" id="textarea-email-label" class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600" placeholder="Ketik Judul Disini...">{{ $tipsMakanan->judul }}</textarea>
                                    </div>
                                    @error('judul')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="py-5 px-6 w-[50rem]">
                                    <div class="pb-2">
                                        <h1 class="text-black">Deskripsi</h1>
                                    </div>
                                    <!-- Textarea -->
                                    <div class="relative">
                                        <textarea name="deskripsi" id="hs-textarea-ex-1" class="p-4 pb-12 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-6000" placeholder="Ketik Deskripsi Disini...">{{ $tipsMakanan->deskripsi }}</textarea>
                                    </div>
                                    @error('deskripsi')
                                        <div class="text-red-500">{{ $message }}</div>
                                    @enderror
                                    <!-- End Textarea -->
                                </div>

                            </div>
                        </div>
                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                            <div class="max-w-sm space-y-3"></div>
                            <div>
                                <div class="inline-flex gap-x-2">
                                    <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- End Footer -->
                    </form>
                </div>
                </div>
            </div>
        </div>
        <!-- End Card -->
    </div>
@endsection
