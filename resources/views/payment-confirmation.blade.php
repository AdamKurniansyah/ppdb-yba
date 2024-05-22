<x-layouts>
      <!-- Your content -->
  <div class="lg:flex lg:justify-between">
    <div class="min-w-0 flex-1">
      <div class="mt-1 lg:max-w-3xl">
        <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
          <p class="text-white text-3sm font-semibold">KONFIRMASI PEMBAYARAN</p>
        </div>
        <div class="space-y-5">
            <div class="pb-10">
              <form action="/payment-confirmation/post" method="post" enctype="multipart/form-data">
                <div>
                  <div class="px-4 mt-5 sm:px-0">
                    <h3 class="text-base font-semibold leading-7 text-gray-900">Konfirmasi Pembayaran</h3>
                    <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Setelah melakukan transaksi pembelian formulir anda diwajibkan memvalidasi dengan konfirmasi pembayaran kembali.</p>
                  </div>
                  <div class="mt-6 border-t border-gray-100">
                    <dl class="divide-y divide-gray-100">
                      {{-- <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Virtual Account</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="text" name="first-name" id="first-name" placeholder="Virtual Account" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div> --}}
                      <div class="col-span-full">
                        <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Upload bukti Transfer</label>
                        <div class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                          <div class="text-center">
                            <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                              <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z" clip-rule="evenodd" />
                            </svg>
                            <div class="mt-4 flex text-sm leading-6 text-gray-600">
                              <label for="image" class="relative cursor-pointer rounded-md font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                <span>Upload a file</span>
                                <input id="image" name="image" type="file" class="sr-only">
                              </label>
                              <p class="pl-1">or drag and drop</p>
                            </div>
                            <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p>
                          </div>
                        </div>
                        </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Nominal Transfer</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="text" name="nominal" id="nominal" placeholder="Nominal Transfer" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Pilih Pembayaran</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="text" name="payment" id="payment" placeholder="Pilih Pembayaran" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Tanggal Transfer</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="date" name="tfDate" id="tfDate" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-800 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Sekolah Pilihan</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="text" name="school" id="school" placeholder="Sekolah Pilihan" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">No Telepon/HP</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="number" name="telepon" id="telepon" placeholder="No Telepon/HP" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Email</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <input type="email" name="email" id="email" placeholder="Email" autocomplete="given-name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </dd>
                      </div>
                      <div class="px-4 py-6 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-0">
                        <dt class="text-sm font-medium leading-6 text-gray-900">Keterangan</dt>
                        <dd class="mt-1 text-sm leading-6 text-gray-700 sm:col-span-2 sm:mt-0">
                          <textarea id="information" name="information" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                          <p class="mt-1 text-sm leading-6 text-gray-500">Wajib isi keterangan</p>
                        </dd>
                      </div>
                    </dl>
                  </div>
                </div>
                <div class="mt-7 flex items-center justify-center">
                  @auth
                  <button type="submit" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Konfirmasi Pembayaran</button>
                  @else
                  <button disabled type="submit" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Konfirmasi Pembayaran</button>
                  @endauth
                </div>
              </form>
                <div class="border-b border-gray-900/10 ring-2 bg-amber-400 shadow-xl rounded-lg mt-5 pb-4 pt-2">
                  <h2 class="text-base p-1 m-1 font-semibold leading-7 text-gray-900">Pemberitahuan!</h2>
                  <p class="mt-1 p-1 m-1 text-sm leading-6 text-gray-600"><strong>Catatan:</strong>
                  <ul>
                    <li class="text-sm text-slate-950 p-1 m-1">*) Harap Input Email dan Nomor HP Dengan Benar, Email dan Nomor HP Tersebut Akan Digunakan Sebagai Info Konfirmasi Pembayaran.</li>
                    <li class="text-sm text-slate-950 p-1 m-1">*) Harap Inputkan Nominal dan Virtual Account Konfirmasi Sesuai Yang Tertera Saat Akan Melakukan Transfer Pembayaran.</li>
                  </ul>
                  </p>
                </div>
              </div>
            </div>
        </div>
    </div>
    <div class="mt-1 lg:mx-auto lg:w-full sm:max-w-sm">
      <x-profile-auth></x-profile-auth>
      <x-form-login></x-form-login>
      <x-guide-video></x-guide-video>
    </div>
  </div>
</x-layouts>