<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Table View</title>
    <!-- Include any additional styles or scripts here -->
    {{-- tailwind  --}}
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 font-sans">

    <section class=" lg:flex bg-white  lg:h-screen font-poppins dark:bg-gray-800 ">
        <div class="justify-center flex-1 max-w-6xl px-4 py-4 mx-auto lg:py-8 md:px-6">
            <div class="pt-4 rounded shadow bg-stone-100 dark:bg-gray-900">
                <div class="p-4 overflow-x-auto">
                    <table class="w-full table-auto">
                        {{-- head --}}
                        <thead>
                            <tr class="text-sm text-left text-gray-500 dark:text-gray-400">
                                <th class="px-6 pb-3 font-medium">No</th>
                                <th class="px-6 pb-3 font-medium">Nama</th>
                                <th class="px-6 pb-3 font-medium">Email</th>
                                <th class="px-6 pb-3 font-medium">Kontak</th>
                                <th class="px-6 pb-3 font-medium">Jenis Mobil</th>
                                <th class="px-6 pb-3 font-medium">Alamat</th>
                                <th class="px-6 pb-3 font-medium">Jenis Kelamin</th>
                                <th class="px-6 pb-3 font-medium">Action</th>

                            </tr>
                        </thead>

                        {{-- body --}}
                        <tbody>
                            @php
                                $no = 1;
                            @endphp
                            @foreach ($peminjams as $peminjam)
                                <tr class="text-sm bg-white dark:text-gray-400 dark:bg-gray-800">
                                    <td class="px-6 py-5 font-medium ">{{ $no++ }}</td>
                                    <td class="flex items-center px-6 py-5 font-medium">
                                        {{-- nomer --}}

                                        <p class="">{{ $peminjam->nama_peminjam }}</p>
                                    </td>
                                    <td class="px-6 py-5 font-medium ">{{ $peminjam->email }}</td>
                                    <td class="px-6 py-5 font-medium ">{{ $peminjam->kontak }}</td>
                                    <td class="px-6 py-5 font-medium ">{{ $peminjam->jenis_mobil }}</td>
                                    <td class="px-6 py-5 font-medium ">{{ $peminjam->alamat }}</td>
                                    <td class="px-6 py-5 font-medium ">{{ $peminjam->jenis_kelamin }}</td>
                                    <td class="flex items-center px-6 py-5 ">
                                        {{-- update --}}
                                        <a href="{{ url('/formEdit/' . $peminjam->id) }}"
                                            class="font-medium text-blue-600 hover:text-blue-500 dark:hover:text-gray-300 dark:text-blue-300">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-4 h-4 mr-3 bi bi-pencil-square"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                                <path fill-rule="evenodd"
                                                    d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                            </svg>
                                        </a>
                                        {{-- delete --}}
                                        <a href="{{ url('/formDelete/' . $peminjam->id) }}"
                                            class="font-medium text-red-600 hover:text-red-500 dark:hover:text-red-300 dark:text-red-400">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="w-4 h-4 bi bi-trash-fill"
                                                viewBox="0 0 16 16">
                                                <path
                                                    d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                    <div class="text-center mt-4">
                        <a href="/"
                            class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Back
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>


</body>


</html>
