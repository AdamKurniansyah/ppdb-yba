<x-layouts>
      <!-- Your content -->
      <div class="lg:flex lg:justify-between">
        <div class="min-w-0 flex-1">
          <div class="mt-1 lg:max-w-3xl">
            <div class="card flex w-full rounded-md shadow-xl justify-center py-3 text-center bg-green-600">
              <p class="text-white text-3sm font-semibold">ALUR PPDB</p>
            </div>
            <div class="flex w-full justify-center py-5 text-center">
              <img src="images/yayasanaba.jpg" alt="alur pendaftaran" class="rounded-lg" style="height: 411px; width: 100%;">
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