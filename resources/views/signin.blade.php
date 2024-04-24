<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/asset/image/titleLogo.png" type="image/x-icon">
    <title>Blind Stick</title>
    @vite('resources/css/app.css')
    <script type="text/javascript" src="{{ ('jquery/jquery.min.js') }}"></script>
</head>

<body class="bg-primary font-poppins ">
    <nav class="fixed z-50 flex items-center justify-between w-full h-[50px] px-[3rem] lg:mt-6">
        <a href="/"><img src="asset/image/logoLogin.svg" alt="Blind Stick Logo" class="lg:w-[90px] w-[70px]" ></a>
        <a href="/" class="lg:block hidden"><img src="asset/image/homeLogin.svg" alt="Home" width="40px"></a>
    </nav>
    @if(session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>
    @endif
    <section class="flex lg:flex-row flex-col bg-white items-center text-[#6C6C6C] lg:bg-gradient-to-r lg:from-primary lg:via-primary lg:via-20% lg:to-[#111F86]  overflow-hidden h-screen w-full relative lg:pt-0 lg:px-0 pt-10 px-5">
        <div class="lg:h-full h-screen w-full  basis-[100%] lg:basis-[40%] bg-white px-[2rem] lg:px-[3rem]">
            <div class="h-full lg:w-[90%] w-full mx-auto flex flex-col items-center justify-center">
                <h1 class="text-[250%] font-extrabold text-[#215695]">Daftar</h1>
                <form action="{{route('actionregister')}}" method="post" class="min-h-[30%] w-full mt-1">
                    @csrf
                    <div id="pengguna" class="h-full w-full">
                        <div class="relative mt-2 w-full">
                            <input type="email" id="emailPenggunaID" name="emailPengguna" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2   transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="emailPenggunaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full ">Email Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="text" id="usernamePenggunaID" name="usernamePengguna" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="usernamePenggunaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Nama Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="password" id="passwordPenggunaID" name="passwordPengguna" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="passwordPenggunaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Kata Sandi Pengguna</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="text" id="kodeID" name="kode" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="kodeID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Kode Tongkat</label>
                        </div>
                        <input type="hidden" name="rolePengguna" value="pengguna">    
                        <div id="nextButton" class="cursor-pointer w-fit lg:py-1.5 lg:px-7 py-2 px-7 bg-[#215695] rounded-[10px] font-medium text-white mt-9" >lanjut</div>
                    </div>
                    <div class="hidden h-full w-full" id="penjaga">
                        <div class="relative mt-2 w-full">
                            <input type="email" id="emailPenjagaID" name="emailPenjaga" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2   transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="emailPenjagaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full ">Email Penjaga</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="text" id="usernamePenjagaID" name="usernamePenjaga" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="usernamePenjagaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Nama Penjaga</label>
                        </div>
                        <div class="relative mt-6 w-full">
                            <input type="password" id="passwordPenjagaID" name="passwordPenjaga" class="border-b py-[2px] focus:outline-none focus:border-[#215695] focus:border-b-2 transition-colors peer w-full" autocomplete="off" oninput="checkInputNotEmpty(this)" onblur="checkInputNotEmpty(this)">
                            <label for="passwordPenjagaID" class="absolute left-0  text-gray-600 cursor-text peer-focus:text-xs peer-focus:-top-4 peer-focus:text-[#215695] transition-all w-full">Kata Sandi Penjaga</label>
                        </div>
                        <input type="hidden" name="rolePenjaga" value="penjaga">
                        <input type="checkbox" name="" id="syarat" required class="mt-2">
                        <label for="syarat">Saya Menyetujui Semua <a href="">Persyaratan</a></label><br>
                        <div class="flex w-full justify-between items-center">
                            <button type="submit" class="cursor-pointer w-fit lg:py-1.5 lg:px-7 py-2 px-7 bg-[#215695] rounded-[10px] font-medium text-white mt-2"> Daftar</button>
                            <div id="backButton" class="cursor-pointer w-fit lg:py-1.5 lg:px-6 py-2 px-7 bg-[#215695] rounded-[10px] font-medium text-white mt-2">kembali</div>
                        </div>
                    </div>
                </form>

                <p class="mt-8">Sudah punya akun? <a href="/masuk" class="text-blue-500 font-medium">Masuk</a> proses ini hanya memerlukan waktu singkat.</p>
                <!-- <a href="" class="text-blue-500 font-medium">lupa password?</a> -->
                <div class="flex  mt-24 gap-2 justify-start w-full">
                    <a href="https://github.com/filipusarif/Blind-Stick-Project" target="_blank"><img src="asset/image/githubLogin.svg" alt="github" width="35px"></a>
                    <a href="https://wa.me/qr/HTPPCZOWYBQVL1" target="_blank"><img src="asset/image/whatsappLogin.svg" alt="whatsapp" width="35px"></a>
                    <a href="https://www.instagram.com/blindstick10?igsh=cG0yamo2OWZmNTU2" target="_blank"><img src="asset/image/instagramLogin.svg" alt="instagram" width="35px"></a>
                </div>
            </div>
        </div>
        <div class="lg:h-full hidden md:grid place-items-center basis-[60%]">
            <img src="asset/image/vectorLogin.svg" alt="vector">
            <div class="-mt-[25%] text-white">
                <h1 class="text-[300%] font-bold">Welcome to Blind Stick!</h1>
                <p class="text-[150%]">Dapatkan Pengalaman Lebih Baik</p>
            </div>
        </div>

    </section>

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <script>
        const pengguna = document.querySelector('#pengguna');
        const penjaga = document.querySelector('#penjaga');
        const nextButton = document.querySelector('#nextButton');
        const backButton = document.querySelector('#backButton');

        nextButton.addEventListener('click', function() {
            pengguna.style.display = "none";
            penjaga.style.display = "block";
        });

        backButton.addEventListener('click', function() {
            pengguna.style.display = "block";
            penjaga.style.display = "none";
        });

        function checkInputNotEmpty(input) {
            const label = input.nextElementSibling;
            if (input.value.trim() !== '') {
                label.classList.add('text-xs', 'text-[#215695]', '-top-4');
            } else {
                label.classList.remove('text-xs', 'text-[#215695]', '-top-4');
            }
        }
        function speakOnPageLoad() {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = "anda berada di halaman daftar";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        document.addEventListener('DOMContentLoaded', speakOnPageLoad());
    </script>
</body>

</html>