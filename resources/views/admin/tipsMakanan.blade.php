@extends('layouts.theme1')
@section('content')
    <div>
        <div>
            <h1 class="font-bold text-lg">Kelola Tips Rekomendasi Makanan</h1>
        </div>

        <div class="pt-5">
            <!-- Card -->
            <div class="flex flex-col">
                <div class="-m-1.5 overflow-x-auto">
                    <div class="p-1.5 min-w-full inline-block align-middle">
                    <div class="bg-white border border-gray-200 rounded-xl shadow-sm overflow-hidden dark:bg-neutral-900 dark:border-neutral-700">
                        <!-- Header -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-b border-gray-200 dark:border-neutral-700">
                            <!-- Input -->
                            <div class="sm:col-span-1">
                                <h1 class="text-black">Table</h1>
                            </div>
                            <div>
                                {{-- <h1 class="text-white">asdasd</h1> --}}
                                <a href="{{ route('tips-makanan.create') }}" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                                    </svg>
                                    Tambah
                                </a>
                            </div>
                            <!-- End Input -->
                        </div>
                        <!-- End Header -->

                        <!-- Table -->
                        <table class="min-w-full divide-y divide-gray-200 dark:divide-neutral-700">
                            <thead class="bg-gray-50 dark:bg-neutral-800">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                No
                                            </span>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Gambar
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Judul
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Deskripsi
                                            </span>
                                        </div>
                                    </th>

                                    <th scope="col" class="px-6 py-3 text-start">
                                        <div class="flex items-center gap-x-2">
                                            <span class="text-xs font-semibold uppercase tracking-wide text-gray-800 dark:text-neutral-200">
                                                Aksi
                                            </span>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            @foreach ($tipsMakanan as $index => $item)
                            <tbody class="divide-y divide-gray-200 dark:divide-neutral-700">
                                <tr class="bg-white dark:bg-neutral-900">
                                    <td class="size-px whitespace-nowrap align-top">
                                        <div class="block p-6">
                                            <div class="flex items-center gap-x-4">
                                                <span class="text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $tipsMakanan->firstItem() + $index }}</span>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap align-top">
                                        <div class="block p-6">
                                            <div class="flex items-center gap-x-4">
                                                <img class="flex-shrink-0 w-20 h-20 rounded-lg" src="{{ asset($item->gambar) }}" alt="Gambar">
                                            </div>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap align-top">
                                        <div class="block p-6">
                                            <div class="flex items-center gap-x-3">
                                                <div class="grow">
                                                    <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $item->judul }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="h-px w-72 min-w-72 align-top">
                                        <div class="block p-6">
                                            <span class="block text-sm font-semibold text-gray-800 dark:text-neutral-200">{{ $item->deskripsi }}</span>
                                        </div>
                                    </td>
                                    <td class="size-px whitespace-nowrap align-top pt-6">
                                        <div class="flex">
                                            <a href="{{ route('tips-makanan.edit', $item->id) }}" class="py-2 px-3 mr-2 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-yellow-600 text-white hover:bg-yellow-700 disabled:opacity-50 disabled:pointer-events-none">
                                                Edit
                                            </a>
                                            <form method="POST" action="{{ route('tips-makanan.delete', $item->id) }}" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-red-600 text-white hover:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
                                                    Hapus
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>

                            @endforeach
                        </table>
                        <!-- End Table -->

                        <!-- Footer -->
                        <div class="px-6 py-4 grid gap-3 md:flex md:justify-between md:items-center border-t border-gray-200 dark:border-neutral-700">
                        <div class="max-w-sm space-y-3">
                            {{-- <select class="py-2 px-3 pe-9 block border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400">
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option selected>5</option>
                            <option>6</option>
                            </select> --}}
                        </div>

                        <div>
                            <div class="inline-flex gap-x-2">
                                {{ $tipsMakanan->links() }}
                            </div>
                        </div>
                        </div>
                        <!-- End Footer -->
                    </div>
                    </div>
                </div>
            </div>
            <!-- End Card -->
        </div>
    </div>
@endsection


