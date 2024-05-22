<!-- An unexamined life is not worth living. - Socrates -->
@guest
@if (session()->has('verifyProcess'))
<div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-950 bg-amber-300 bg-opacity-50">
    {{ session('verifyProcess') }}
</div>
@endif

<div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
    <p class="text-white text-3sm font-semibold">FORM MENDAFTAR</p>
</div>

<form class="space-y-5" action="register" method="POST">
    @csrf
    <div>
        <div class="mt-5">
            <input id="name" name="name" type="text" autofocus autocomplete="name" placeholder="Name" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        </div>
        </div>
    <div>
    <div class="mt-5">
        <input id="email" name="email" type="email" autocomplete="email" placeholder="Email" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>
    </div>
    <div>
    <div>
        <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
    </div>  
    {{-- <div class="mt-5">
        <div class="mt-2">
        <select id="schoolYear" name="schoolYear" autocomplete="schoolYear" required class="block w-full rounded-md border-0 py-2 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 px-2 sm:text-sm sm:leading-6">
            <option>- Pilih tahun ajaran -</option>
            <option>2024/2025</option>
            <option>2025/2026</option>
            <option>2027/2028</option>
        </select>
        </div>
    </div> --}}
    </div>
    <div>
    <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Daftar</button>
    </div>
</form>
<p class="mt-2 text-center text-sm text-gray-500">
    Sudah mempunyai akun?
    <a href="/" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Masuk</a>
</p>
@endguest