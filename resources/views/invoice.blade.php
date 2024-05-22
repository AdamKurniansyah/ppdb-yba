<!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>FORGOT PASSWORD</title>
    <style>
    :root {
        --gradient: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
    }
    .min-h-full {
        min-height: 100vh;
        background-color: #eaeaea;
        background-image: var(--gradient);
        background-size: 150%;
        animation: gradient-animation 5s infinite alternate;
    }
    @keyframes gradient-animation {
        0% {
        background-position: left;
        }
        100% {
        background-position: right;
        }
    }
    </style>
</head>
<body class="h-full">
    <div class="min-h-full">

          <div class="mx-auto max-w-lg justify-center py-10">
            <div class="w-screen max-w-md flex-aut overflow-hidden rounded-3xl bg-white text-sm leading-6 shadow-lg ring-1 ring-gray-900/5">
              <div class="p-4">
                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                  <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    &#x2714;
                  </div>
                  <div>
                    <a class="font-semibold text-gray-900">
                      Pilihan Sekolah
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">{{ $order->school_choise }}</p>
                  </div>
                </div>
                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                  <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    &#x2714;
                  </div>
                  <div>
                    <a class="font-semibold text-gray-900">
                      Tahun Pembelajaran
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">{{ $order->year_of_study }}</p>
                  </div>
                </div>
                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                  <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    &#x2714;
                  </div>
                  <div>
                    <a class="font-semibold text-gray-900">
                      Nama Lengkap
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">{{ $order->name }}</p>
                  </div>
                </div>
                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                  <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    &#x2714;
                  </div>
                  <div>
                    <a class="font-semibold text-gray-900">
                      Jenis Kelamin
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">{{ $order->gender }}</p>
                  </div>
                </div>
                <div class="group relative flex gap-x-6 rounded-lg p-4 hover:bg-gray-50">
                  <div class="mt-1 flex h-11 w-11 flex-none items-center justify-center rounded-lg bg-gray-50 group-hover:bg-white">
                    &#x2714;
                  </div>
                  <div>
                    <a class="font-semibold text-gray-900">
                      Status
                      <span class="absolute inset-0"></span>
                    </a>
                    <p class="mt-1 text-gray-600">Paid</p>
                  </div>
                </div>
              </div>
              <div class="grid grid-cols-2 divide-x divide-gray-900/5 bg-gray-50">
                <a href="#" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                  Print
                </a>
                <a href="/" class="flex items-center justify-center gap-x-2.5 p-3 font-semibold text-gray-900 hover:bg-gray-100">
                  Kembali &rarr;
                </a>
              </div>
            </div>
          </div>

    </div>
</body>
</html>