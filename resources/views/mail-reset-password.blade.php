<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>REQUEST FORGOT PASSWORD</title>
    <style>
    :root {
        --gradient: linear-gradient(45deg, #85FFBD 0%, #FFFB7D 100%);
    }
    .min-h-full {
        min-height: 100vh;
        background-color: #eaeaea;
        background-image: var(--gradient);
        background-size: 200%;
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
      <main class="grid min-h-full place-items-center bg-white px-6 py-24 sm:py-3 lg:px-8">
        <div class="text-center">
          <p class="text-base font-semibold text-indigo-600">PASSWORD</p>
          <h1 class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-xl">Hai, kamu ada permintaan reset password</h1>
          <p class="mt-6 text-base leading-7 text-gray-600">Klik tombol dibawah ini untuk melanjutkan</p>

            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="{{ route('validation-forgot-password', ['token' => $token]) }}" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xl hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Klik &nbsp; <span>&#x2714;</span></a>
            </div>

          @if (session()->has('successSend'))
          <div class="card flex w-full rounded-xl justify-center py-3 my-2 text-sm text-center text-slate-50 bg-green-500 bg-opacity-50">
              {{ session('successSend') }}
          </div>
          @endif
        </div>
      </main>
    </div>
</body>
</html>