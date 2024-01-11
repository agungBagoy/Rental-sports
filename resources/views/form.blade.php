<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- tailwind  --}}
    @vite('resources/css/app.css')
</head>

<body>
    <section class="py-16 bg-stone-100 font-poppins dark:bg-gray-800">
        <div
            class="max-w-4xl px-4 py-4 mx-auto bg-white border shadow-sm dark:border-gray-900 dark:bg-gray-900 lg:py-4 md:px-6">
            <div class="mb-10 ">
                <h2 class="pb-2 mb-2 text-xl font-bold text-gray-800 md:text-3xl dark:text-gray-300">
                    Basic Info
                </h2>
                <p class="text-sm dark:text-gray-400">
                    Lorem ipsum dor amet ispicusus isopiros amet ispis lorem
                </p>
            </div>
            @if (session('berhasil'))
                <div class="bg-green-200 p-4 mb-4">
                    {{ session('berhasil') }}
                </div>
            @endif
            <form action="{{ url('/formAdd') }}" class="" method="POST">
                @csrf
                <div class="mb-6">
                    <label for="" class="block mb-2 text-sm font-medium dark:text-gray-400">Nama</label>
                    <input name="nama_peminjam" id="nama_peminjam" type="text"
                        class="block w-full px-4 py-3 mb-2 text-sm bg-gray-100 border rounded dark:placeholder-gray-400 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-800"
                        placeholder="Full name...." required>
                </div>
                <div class="mb-6">
                    <label for="" class="block mb-2 text-sm font-medium dark:text-gray-400">Email</label>
                    <input type="email" name="email" placeholder="abc@gmail.com" required
                        class="block w-full px-4 py-3 mb-3 leading-tight placeholder-gray-400 bg-gray-100 border rounded ark:border-gray-800 dark:bg-gray-800 dark:placeholder-gray-500 dark:text-gray-400 dark:border-gray-800 ">
                </div>
                <div class="mb-6">
                    <label for="" class="block mb-2 text-sm font-medium dark:text-gray-400">Kontak</label>
                    <input type="text" name="kontak" placeholder="kontak" required
                        class="block w-full px-4 py-3 mb-3 leading-tight placeholder-gray-400 bg-gray-100 border rounded ark:border-gray-800 dark:bg-gray-800 dark:placeholder-gray-500 dark:text-gray-400 dark:border-gray-800 ">
                </div>
                <div class="mb-6">
                    <label for="" class="block mb-2 text-sm font-medium dark:text-gray-400">Jenis mobil</label>
                    <input type="text" name="jenis_mobil" placeholder="jenis mobil" required
                        class="block w-full px-4 py-3 mb-3 leading-tight placeholder-gray-400 bg-gray-100 border rounded ark:border-gray-800 dark:bg-gray-800 dark:placeholder-gray-500 dark:text-gray-400 dark:border-gray-800 ">
                </div>
                <div class="mb-6">
                    <label for="" class="block mb-2 text-sm font-medium dark:text-gray-400">Alamat</label>
                    <textarea type="message" name="alamat" placeholder="Message.." required
                        class="block w-full px-4 py-6 leading-tight placeholder-gray-400 bg-gray-100 border rounded dark:placeholder-gray-400 dark:text-gray-400 dark:border-gray-800 dark:bg-gray-800 "></textarea>
                </div>

                <div class="mb-8">
                    <label for="" class="block mb-2 text-sm font-medium dark:text-gray-400">Jenis
                        kelamin</label>
                    <select name="jenis_kelamin"
                        class="block w-full px-4 py-3 mb-3 leading-tight placeholder-gray-400 bg-gray-100 border rounded dark:border-gray-800 dark:bg-gray-800 dark:placeholder-gray-500 dark:text-gray-400 dark:border-gray-800">
                        <option value="pria">Pria</option>
                        <option value="wanita">Wanita</option>
                    </select>
                </div>

                <button class="px-4 py-2 text-base text-gray-100 bg-blue-600 rounded hover:bg-blue-500">Send</button>
                <div class="text-center mt-4">
                    <a href="/"
                        class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        Back
                    </a>
                </div>
        </div>
        </form>


        </div>
    </section>
</body>

</html>
