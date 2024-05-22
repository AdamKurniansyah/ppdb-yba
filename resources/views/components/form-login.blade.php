<!-- I begin to speak only when I am certain what I will say is not better left unsaid. - Cato the Younger -->
@guest
@if (session()->has('success'))
<div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
    {{ session('success') }}
</div>
@endif
@if (session()->has('loginError'))
<div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-red-500 bg-opacity-50">
    {{ session('loginError') }}
</div>
@endif

  <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
    <p class="text-white text-3sm font-semibold">FORM MASUK</p>
  </div>

  <form class="space-y-5" action="/login" method="POST">
    @csrf
    <div>
      <div class="mt-5">
        <input id="email" name="email" type="email" autocomplete="email" placeholder="Email" required value="{{ old('email') }}" class="@error('email') is-invalid @enderror block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
        @error('email')
          <div class="invalid-feedback text-xs mx-2">
            {{ $message }}
          </div>
        @enderror
      </div>
    </div>
    <div>
      <div>
        <input id="password" name="password" type="password" autocomplete="current-password" placeholder="Password" required class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 px-3 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
      </div>
      <div class="flex mt-1 items-center justify-end">
        <div class="text-sm">
          <a href="/forgot-password" class="font-semibold text-indigo-600 hover:text-indigo-500">Lupa password?</a>
        </div>
      </div>
    </div>
    <div>
      <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Masuk</button>
    </div>
  </form>
  <p class="mt-2 text-center text-sm text-gray-500">
    Belum mempunyai akun?
    <a href="/register" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Daftar</a>
  </p>
  @endguest