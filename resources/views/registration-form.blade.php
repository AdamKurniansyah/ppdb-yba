<x-layouts>
  <!-- Your content -->
  <div class="lg:flex lg:justify-betwee">
    <div class="min-w-0 flex-1">
      <div class="mt-1 lg:max-w-3xl">
        <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
          <p class="text-white text-3sm font-semibold">PEMBELIAN FORMULIR PENDAFTARAN</p>
        </div>
        <form action="/checkout" method="post">
          @csrf
          <div class="space-y-5">
            <div class="pb-0">
              <h2 class="mt-4 text-base font-semibold leading-7 text-gray-900">Data Pilihan Sekolah</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Pilih Sekolah dan Tahun Pembelajaran.</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="school_choise" class="block text-sm font-medium leading-6 text-gray-900">Pilih Sekolah</label>
                  <div class="mt-1">
                    <select id="school_choise" name="school_choise" autocomplete="school_choise" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected disabled>- Pilih salah satu -</option>
                      <option value="KB/TK Muslimat NU 02 Nurul Huda Miji">KB/TK Muslimat NU 02 Nurul Huda Miji</option>
                      <option value="SD/MI Ma'arif NU Nurul Huda 01 Miji">SD/MI Ma'arif NU Nurul Huda 01 Miji</option>
                    </select>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="year_of_study" class="block text-sm font-medium leading-6 text-gray-900">Tahun Pembelajaran PPDB</label>
                  <div class="mt-1">
                    <select id="year_of_study" name="year_of_study" autocomplete="year_of_study" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected disabled>- Pilih salah satu -</option>
                      <option value="2024/2025">2024/2025</option>
                      <option value="2025/2026">2025/2026</option>
                      <option value="2026/2027">2026/2027</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-0">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Data Calon Pendaftar</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Masukkan data diri calon siswa/i yang akan mendaftar sekolah.</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap</label>
                  <div class="mt-1">
                    <input required type="text" name="name" id="name" placeholder="Nama lengkap" autocomplete="name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="gender" class="block text-sm font-medium leading-6 text-gray-900">Jenis Kelamin</label>
                  <div class="mt-1">
                    <select id="gender" name="gender" autocomplete="gender" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected disabled>- Pilih salah satu -</option>
                      <option value="Laki-laki">Laki-laki</option>
                      <option value="Perempuan">Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="place_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Tempat Lahir</label>
                  <div class="mt-1">
                    <input type="text" name="place_of_birth" id="place_of_birth" placeholder="Tempat Lahir" autocomplete="place_of_birth" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="date_of_birth" class="block text-sm font-medium leading-6 text-gray-900">Tanggal Lahir</label>
                  <div class="mt-1">
                    <input type="date" name="date_of_birth" id="date_of_birth" autocomplete="date_of_birth" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email</label>
                  <div class="mt-1">
                    <input type="email" name="email" id="email" placeholder="Email" autocomplete="email" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="from_school" class="block text-sm font-medium leading-6 text-gray-900">Asal Sekolah</label>
                  <div class="mt-1">
                    <input type="text" name="from_school" id="from_school" placeholder="Asal Sekolah" autocomplete="from_school" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
              </div>
            </div>
            <div class="pb-12">
              <h2 class="text-base font-semibold leading-7 text-gray-900">Data Orangtua/Wali</h2>
              <p class="mt-0 text-sm leading-6 text-gray-600">Masukkan data diri orangtua atau wali dari calon siswa/i pendaftar.</p>
              <div class="mt-4 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="sm:col-span-3">
                  <label for="parent_name" class="block text-sm font-medium leading-6 text-gray-900">Nama Lengkap Orangtua/Wali</label>
                  <div class="mt-1">
                    <input type="text" name="parent_name" id="parent_name" placeholder="Nama Lengkap Orangtua/Wali" autocomplete="parent_name" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="sm:col-span-3">
                  <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">No Telepon/HP</label>
                  <div class="mt-1">
                    <input type="number" name="phone_number" id="phone_number" placeholder="ex: 0881-0909-097" autocomplete="phone_number" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                  </div>
                </div>
                <div class="col-span-full">
                  <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Alamat</label>
                  <div class="mt-1">
                    <textarea id="address" name="address" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                  </div>
                  <p class="mt-1 text-sm leading-6 text-gray-500">Isi alamat lengkap sesuai KK/KTP</p>
                </div>
                <div class="col-span-full">
                  <label for="qty" class="block text-sm font-bold leading-6 text-gray-900">Jumlah Formulir</label>
                  <div class="mt-1">
                    <select id="qty" name="qty" autocomplete="qty" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-xl ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                      <option selected disabled>- Pilih salah satu -</option>
                      <option value="1">1 Formulir</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="mt-10 flex items-center justify-center">
                @auth
                <button type="submit" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Beli Formulir</button>
                @else
                <button disabled type="submit" class="rounded-lg bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Beli Formulir</button>
                @endauth
              </div>
              <div class="text-center border-b border-gray-900/10 ring-2 bg-amber-400 shadow-xl rounded-lg mt-5 pb-4 pt-2">
                <h2 class="text-base p-1 m-1 font-semibold leading-7 text-gray-900">Pemberitahuan!</h2>
                <p class="mt-1 p-1 m-1 text-sm leading-6 text-gray-600"><strong>Catatan:</strong> Dihimbau kepada calon wali murid yang mempunyai KARTANU/KARTAMUS/Alumni Busyri Al Aly untuk langsung membeli Formulir di sekolah dengan membawa bukti atau bisa menghubungi panitia PPDB melalui kontak/whatsapp support, dan bagi pembeli Formulir online diharap Inputkan Email dengan benar, Email Tersebut Akan Digunakan Sebagai Konfirmasi Pembayaran Formulir Pendaftaran Serta Informasi Lainnya.</p>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
    <div class="mt-1 lg:mx-auto lg:w-full sm:max-w-sm">
      <x-profile-auth></x-profile-auth>
      <x-form-login></x-form-login>
      <x-guide-video></x-guide-video>
    </div>
  </div>
</x-layouts>