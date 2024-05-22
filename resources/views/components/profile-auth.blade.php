<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
@auth
<div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
  <p class="text-white text-3sm font-semibold">PROFIL</p>
</div>
<div class="mt-3 px-2">
  <dl class="divide-y divide-gray-100">
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
      <dt class="text-sm font-medium leading-6 text-gray-900">Nama Lengkap</dt>
      <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ auth()->user()->name }}</dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
      <dt class="text-sm font-medium leading-6 text-gray-900">Alamat Email</dt>
      <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">{{ auth()->user()->email }}</dd>
    </div>
    <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
      <dt class="text-sm font-medium leading-6 text-gray-900">Logout</dt>
      <dd class="mt-2 text-sm text-gray-900 sm:col-span-2 sm:mt-0">
        <ul role="list" class="divide-y divide-gray-100 rounded-md border border-gray-200">
          <li class="flex items-center justify-between py-2 pl-2 pr-5 text-sm leading-6">
            <div class="flex w-0 flex-1 items-center">
              <div class="ml-0 flex min-w-0 flex-1 gap-2">
                <span class="flex-shrink-0 text-gray-400">&#42; Tekan tombol jika ingin</span>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="font-medium text-indigo-600 hover:text-indigo-500">Keluar</button>
                </form>
              </div>
            </div>
          </li>
        </ul>
      </dd>
    </div>
  </dl>
</div>
@endauth