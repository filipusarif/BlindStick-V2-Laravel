<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blind Stick</title>
    <link rel="icon" href="/asset/image/titleLogo.ico">
    <!-- @include('tailwind/config') -->
    @vite('resources/css/app.css')
    @include('component/scrollbar')
</head>

<body class=" bg-slate-900 font-roboto">
    <!-- Navbar -->
    @include('component/navbar')

    <!-- hero -->
    <section class="bg-[#090E34] min-h-screen py-20 lg:py-0 lg:h-screen w-full relative overflow-hidden px-5 lg:px-0 text-[#F2F7EE]">
        <img src="asset\image\Background\HeroBG.svg" alt="" class="absolute lg:left-0 right-0 transform -scale-x-100 lg:scale-x-100 bottom-0 w-[40%] lg:w-[20%]" >
        <main class="container mx-auto flex flex-col-reverse lg:flex-row gap-5 h-full justify-center items-center ">
            <div class="flex flex-col items-start basis-[80%] gap-4">
                <h1 class="text-[35px] leading-[40px] lg:text-[55px] lg:leading-[60px] font-extrabold ">Solusi Navigasi Inovatif Tunanetra</h1>
                <div class="bg-[#D9D9D9] w-[40%] h-[2px] rounded-full"></div>
                <p class="text-[#8793B1] font-medium text-[13px] lg:text-[14px] leading-5">Temukan Solusi Navigasi Terdepan untuk Tunanetra dengan Teknologi Inovatif kami! Aplikasi terhubung dengan tongkat IoT memungkinkan pengguna tunanetra untuk menjelajahi dunia dengan lebih percaya diri.</p>
                <a href="#Bundle" class="bg-[#476DF6] px-5 py-2 text-[18px] font-medium rounded-lg">Mulai Sekarang</a>
                <div class="flex gap-3 mt-10">
                    <a href="https://github.com/filipusarif/Blind-Stick-Project" target="_blank"><img width="25px" src="asset\image\github.svg" alt="github"></a>
                    <a href="https://wa.me/qr/HTPPCZOWYBQVL1" target="_blank"><img width="25px" src="asset\image\wa.svg" alt="whatsApp"></a>
                    <a href="https://www.instagram.com/blindstick10?igsh=cG0yamo2OWZmNTU2" target="_blank"><img width="25px" src="asset\image\instagram.svg" alt="instagram"></a>
                </div>
            </div>
            <div class="">
                <img src="asset\image\Background\MainMapFull.svg" width="200%" alt="MapPolandia">
            </div>
        </main>
    </section>

    <!-- Layanan -->
    <section class="font-roboto justify-center relative bg-primaryOdd grid place-content-center min-h-[50vh] overflow-hidden lg:h-screen w-full z-20 text-[#EEEEEE]" id="Layanan">
        <img src="asset\image\Background\FeatureBG.svg" alt="" class="absolute opacity-30 right-0 bottom-0 w-[30%]" >
        <main class="container mx-auto py-10 lg:py-0">
        
        <div class="flex flex-col items-center">
            <h2 class="text-[34px] lg:text-[64px] font-extrabold">Layanan Utama</h2>
            <p class="text-[#8793B1] font-medium text-[13px] lg:text-[16px] leading-5 mb-10 lg:mb-20 max-w-[700px] text-center">
                Kami memberikan solusi terbaik dengan navigasi intuitif dan fitur khusus untuk memenuhi kebutuhan sehari-hari dengan mudah
            </p>
            <div class="flex flex-wrap justify-center gap-x-32 gap-y-8 mb-4 ">
                <article class="w-[300px] lg:w-[360px] flex flex-col gap-y-[16px]">
                    <div class="bg-[#0E1B4E] p-2 w-fit rounded-md">
                        <img src="asset\image\navigasi2.svg" alt="test" class="w-[28px]">
                    </div>
                    <h5 class="text-[#F2F7EE] font-bold text-[24px]">Navigasi</h5>
                    <p class="text-[#8793B1] font-medium text-[16px]">Navigasi kami menawarkan panduan akurat dan intuitif, memungkinkan Anda menjelajahi lingkungan sekitar dengan percaya diri dan kenyamanan yang tinggi.</p>
                </article>
                <article class="w-[300px] lg:w-[360px] flex flex-col gap-y-[16px]">
                    <div class="bg-[#0E1B4E] p-2 w-fit rounded-md">
                        <img src="asset\image\obstacle2.svg" alt="test" class="w-[28px]">
                    </div>
                    <h5 class="text-[#F2F7EE] font-bold text-[24px]">Pendeteksi Rintangan</h5>
                    <p class="text-[#8793B1] font-medium text-[16px]">Mengidentifikasi objek yang menghalangi jalan bagi pengguna BlindStick, memberikan peringatan untuk mencegah tabrakan atau hambatan yang mungkin terjadi.</p>
                </article>
                <article class="w-[300px] lg:w-[360px] flex flex-col gap-y-[16px]">
                    <div class="bg-[#0E1B4E] p-2 w-fit rounded-md">
                        <img src="asset\image\helping2.svg" alt="test" class="w-[28px]">
                    </div>
                    <h5 class="text-[#F2F7EE] font-bold text-[24px]">Sinyal Bantuan</h5>
                    <p class="text-[#8793B1] font-medium text-[16px]">Memungkinkan pengguna untuk mengirim pesan bantuan kepada pendamping atau pihak terkait dalam situasi darurat atau ketika mereka membutuhkan bantuan.</p>
                </article>
                <article class="w-[300px] lg:w-[360px] flex flex-col gap-y-[16px]">
                    <div class="bg-[#0E1B4E] p-2 w-fit rounded-md">
                        <img src="asset\image\suara2.svg" alt="test" class="w-[28px]">
                    </div>
                    <h5 class="text-[#F2F7EE] font-bold text-[24px]">Suara Interaktif</h5>
                    <p class="text-[#8793B1] font-medium text-[16px]">Memungkinkan aplikasi berkomunikasi dengan pengguna melalui panduan suara, meningkatkan interaksi dan memudahkan penggunaan fitur-fitur aplikasi secara intuitif.</p>
                </article>
            </div>
        </div>
            
        </main>
    </section>

    <!-- About -->
    <section class="bg-primary min-h-screen w-full grid place-content-center overflow-hidden px-5 lg:px-0  text-[#F2F7EE]">
        <main class="container py-10 lg:py-0 mx-auto flex lg:flex-row flex-col-reverse h-full gap-8  justify-center items-center ">
            <div class="flex flex-col  basis-[60%] gap-5">
                <h1 class="text-[24px] lg:text-[44px] font-extrabold leading-7 lg:leading-[60px]">Cerita di Balik Layanan Kami: Misi, Visi, dan Inspirasi</h1>
                <p class="text-[14px] w-full lg:w-[75%] text-nonActive">Kami berkomitmen untuk membantu pengguna tunanetra dengan pendapatan rendah dengan menyediakan tongkat serta layanan berkualitas tinggi dengan harga terjangkau. Visi kami adalah menciptakan aksesibilitas yang lebih luas bagi mereka yang membutuhkan, sambil memberikan inspirasi bagi pengguna lain untuk mewujudkan potensi mereka.</p>
                <div class="flex gap-20 justify-start items-center text-[14px] text-nonActive">
                    <div class="flex flex-col gap-4 justify-start items-start ">
                        <div class="flex items-center justify-start gap-2 lg:gap-3">
                            <img src="asset\image\Background\check.svg" class="w-[25px]" alt="">
                            <p class="text-[12px] lg:text-[14px]">Standar Kualitas Tinggi</p>
                        </div>
                        <div class="flex items-center justify-start gap-2 lg:gap-3">
                            <img src="asset\image\Background\check.svg" class="w-[25px]" alt="">
                            <p class="text-[12px] lg:text-[14px]">Harga Terjangkau</p>
                        </div>
                        <div class="flex items-center justify-start gap-2 lg:gap-3">
                            <img src="asset\image\Background\check.svg" class="w-[25px]" alt="">
                            <p class="text-[12px] lg:text-[14px]">Inovasi Berkelanjutan</p>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4 justify-start items-start ">
                        <div class="flex items-center justify-start gap-2 lg:gap-3">
                            <img src="asset\image\Background\check.svg" class="w-[25px]" alt="">
                            <p class="text-[12px] lg:text-[14px]">Garansi Kepuasan</p>
                        </div>
                        <div class="flex items-center justify-start gap-2 lg:gap-3">
                            <img src="asset\image\Background\check.svg" class="w-[25px]" alt="">
                            <p class="text-[12px] lg:text-[14px]">Dukungan Komunitas</p>
                        </div>
                        <div class="flex items-center justify-start gap-2 lg:gap-3">
                            <img src="asset\image\Background\check.svg" class="w-[25px]" alt="">
                            <p class="text-[12px] lg:text-[14px]">Komitmen Kemanusiaan</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="basis-[40%]">
                <img src="asset\image\Background\AboutImage.svg" alt="">
            </div>
        </main>
    </section>

    <!-- feedback -->
    <section class="bg-primaryOdd h-fit py-[80px] w-full overflow-hidden px-5 lg:px-0  text-[#F2F7EE]">
        <main class="container mx-auto flex flex-col h-full justify-center items-center ">
            <h1 class="text-[24px] text-center lg:text-[44px]  font-extrabold ">Ulasan Pengguna Kami</h1>
            <p class="text-nonActive text-[14px] lg:text-[16px] text-center font-medium">Beberapa pengalaman dan pendapat dari para pengguna terhadap produk atau layanan kami.</p>
            <div class="flex lg:flex-row flex-col items-center justify-center w-full gap-3 mt-10">
                <div class="bg-[#1B2141] basis-[30%] flex flex-col gap-4 p-5 rounded-md">
                    <div class="flex gap-1 justify-start items-center">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                    </div>
                    <p class="text-[14px]">“Aplikasi ini benar-benar membantu meningkatkan kemandirian saya sehari-hari.</p>
                    <div class="h-[2px] w-full bg-[#25294C] my-2"></div>
                    <div class="flex flex-row justify-start items-center gap-3">
                        <img src="asset\image\Background\icon1.svg" class="w-[40px] rounded-full" alt="">
                        <h1>Muhammad Basir</h1>
                    </div>
                </div>
                <div class="bg-[#1B2141] basis-[30%] flex flex-col gap-4 p-5 rounded-md">
                    <div class="flex gap-1 justify-start items-center">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\starHalf.svg" alt="">
                    </div>
                    <p class="text-[14px]">“Fitur navigasinya sangat membantu saya dalam menjelajahi kota.</p>
                    <div class="h-[2px] w-full bg-[#25294C] my-2"></div>
                    <div class="flex flex-row justify-start items-center gap-3">
                        <img src="asset\image\Background\icon2.svg" class="w-[40px] rounded-full" alt="">
                        <h1>Adryansyah</h1>
                    </div>
                </div>
                <div class="bg-[#1B2141] basis-[30%] flex flex-col gap-4 p-5 rounded-md">
                    <div class="flex gap-1 justify-start items-center">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                        <img src="asset\image\Background\star.svg" alt="">
                    </div>
                    <p class="text-[14px]">“Terima kasih atas aplikasi yang luar biasa ini, sangat direkomendasikan!</p>
                    <div class="h-[2px] w-full bg-[#25294C] my-2"></div>
                    <div class="flex flex-row justify-start items-center gap-3">
                        <img src="asset\image\Background\icon3.svg" class="w-[40px] rounded-full" alt="">
                        <h1>Rahmawaty</h1>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- Bundle -->
    <section class="bg-primary min-h-screen lg:h-screen w-full overflow-hidden px-5 lg:px-0  text-[#F2F7EE]" id="Bundle">
        <main class="container py-10 lg:py-0 mx-auto flex flex-col h-full justify-center items-center ">
            <h1 class="text-[24px] lg:text-[44px] text-center font-extrabold ">Praktis dengan Harga Terjangkau</h1>
            <p class="text-nonActive text-[14px] text-center lg:text-[16px] font-medium">Solusi yang menyediakan kualitas dan kemudahan penggunaan sehari-hari dengan harga yang ramah di kantong.</p>
            <div class="flex gap-5 flex-wrap flex-col lg:flex-row justify-center items-center w-full mt-10">
                <div class="bg-card gap-4 basis-[33%] flex flex-col justify-center p-7 rounded-lg">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-[24px]">Rp 199.900</h3>
                        <h4 class="font-extrabold text-[14px]">Premium</h4>
                    </div>
                    <p class="text-[14px] font-medium text-nonActive">Paket bagi pemilik tongkat untuk mendapatkan pembaruan layanan aplikasi selama 12 bulan.</p>
                    <a href="" class="bg-secondary px-5 rounded-lg font-bold py-3 text-center">Beli Sekarang</a>
                    <div class="w-full my-2 h-[2px] bg-[#282C4F]"></div>
                    <div class="flex flex-col h-[180px] gap-3 justify-start items-start font-medium text-[13px] text-nonActive">
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class=" ">Mendapatkan Tongkat IoT</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Akses Penuh Fitur Tambahan</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Layanan Aplikasi Selama 6 Bulan</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Dukungan Pelanggan Prioritas</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Pembaruan Fitur Langsung</p>
                        </div>
                    </div>
                </div>

                <div class="bg-card gap-4 basis-[33%] flex flex-col justify-center p-7 rounded-lg">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-[24px]">Rp 9.900<span class="text-nonActive">/Bulan</span></h3>
                        <h4 class="font-extrabold text-[14px]">Basic</h4>
                    </div>
                    <p class="text-[14px] font-medium text-nonActive">Paket eksklusif dengan mendapatkan tongkat IoT dan bonus layanan aplikasi selama 6 bulan.</p>
                    <a href="" class="bg-secondary px-5 rounded-lg font-bold py-3 text-center">Beli Sekarang</a>
                    <div class="w-full my-2 h-[2px] bg-[#282C4F]"></div>
                    <div class="flex flex-col h-[180px] gap-3 justify-start items-start font-medium text-[13px] text-nonActive">
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class=" ">Layanan Aplikasi Selama 1 Bulan</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Akses Penuh Fitur Tambahan</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Dukungan Pelanggan Prioritas</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Pembaruan Fitur Langsung</p>
                        </div>
                    </div>
                </div>

                <div class="bg-card gap-4 basis-[33%] flex flex-col justify-center p-7 rounded-lg">
                    <div class="flex justify-between items-center">
                        <h3 class="font-bold text-[24px]">Rp 99.900<span class="text-nonActive">/Tahun</span></h3>
                        <h4 class="font-extrabold text-[14px]">Standar</h4>
                    </div>
                    <p class="text-[14px] font-medium text-nonActive">Paket bagi pemilik tongkat untuk mendapatkan pembaruan layanan aplikasi selama 1 bulan.</p>
                    <a href="" class="bg-secondary px-5 rounded-lg font-bold py-3 text-center">Beli Sekarang</a>
                    <div class="w-full my-2 h-[2px] bg-[#282C4F]"></div>
                    <div class="flex flex-col h-[180px] gap-3 justify-start items-start font-medium text-[13px] text-nonActive">
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class=" ">Layanan Aplikasi Selama 1 tahun</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Akses Penuh Fitur Tambahan</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Dukungan Pelanggan Prioritas</p>
                        </div>
                        <div class="flex flex-row justify-start items-center gap-2">
                            <img src="asset\image\Background\check.svg" class="w-[20px] rounded-full" alt="">
                            <p class="">Pembaruan Fitur Langsung</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>

    <!-- Bantuan -->
    <section class="bg-primaryOdd min-h-screen lg:h-screen w-full overflow-hidden px-5 lg:px-0  text-[#F2F7EE]" id="Bundle">
        <main class="container py-10 lg:py-0 mx-auto h-full flex lg:flex-row flex-col gap-5 justify-center items-center ">
            <div class="basis-[65%] bg-card p-10 flex flex-col h-[500px] gap-1 rounded-lg">
                <h3 class="font-extrabold text-[24px] lg:text-[30px] ">Perlukan Bantuan? Ajukan Tiket Bantuan </h3>
                <p class="font-medium text-nonActive text-[14px]">Tim dukungan kami akan segera menghubungi Anda secepatnya melalui email.</p>
                <form action="/kritik" method="post" class="w-full flex flex-col justify-start items-start pb-10">
                    @csrf
                    <div class="flex flex-col lg:flex-row justify-between w-full gap-2 lg:gap-4 items-center">
                        <div class="flex flex-col basis-[50%]">
                            <label for="name" class=" font-semibold text-[#F2F7EE] mt-5">Nama</label>
                            <input type="text" name="inputNameKritik" id="name" class="bg-[#232B50] py-2 px-3 rounded-md border-none w-full border-[#2AA7D6] border outline-none ">
                        </div>
                        <div class="flex flex-col basis-[50%]">
                            <label for="email" class=" font-semibold text-[#F2F7EE] mt-5">Email</label>
                            <input type="email" name="inputEmailKritik" id="email" class="bg-[#232B50] py-2 px-3 rounded-md border-none border-[#2AA7D6] border outline-none ">
                        </div>
                    </div>
                    <label for="kritik" class=" font-semibold text-[#F2F7EE] mt-5">Pesan Bantuan</label>
                    <textarea name="kritik" id="kritik" cols="30" rows="5" style="resize: none;" class="w-full bg-[#232B50] outline-none p-4 rounded-md"></textarea>
                    <button type="submit" class="text-right py-3 px-10 mt-5 bg-secondary rounded-lg font-medium">Kirim Pesan</button>
                </form>
            </div>
            <div class="basis-[35%] bg-[#101849] h-[500px] p-7 rounded-lg">
                <h1 class=" font-extrabold text-[24px] leading-7">Berlangganan untuk menerima pesan pembaruan.</h1>
                <p class=" font-medium text-nonActive text-[14px] mt-2">Berlangganan untuk menerima informasi terbaru dan pembaruan secara langsung ke email Anda.</p>
                <div class="bg-[#232B50] h-[2px] w-full my-10 rounded-full"></div>
                <form action="" method="post" class="w-full gap-3 flex flex-col justify-start items-start pb-10">
                    @csrf
                    <input type="text" name="inputNameLangganan" id="nameLangganan" class="bg-[#232B50] py-3 px-4 w-full rounded-md border-none border-[#2AA7D6] border outline-none " placeholder="Masukkan Nama Anda">
                    <input type="email" name="inputEmailLangganan" id="emailLangganan" class="bg-[#232B50] py-3 px-4 w-full rounded-md border-none border-[#2AA7D6] border outline-none " placeholder="Masukkan Email Anda">
                    <button type="submit" class="py-3 w-full text-center bg-secondary rounded-lg font-medium">Langganan</button>
                </form>
                <p class="text-center font-medium text-nonActive text-[14px]">Terjamin tidak ada spam, jadi tolong jangan kirimkan email spam.</p>
            </div>
        </main>
    </section>

    <!-- Footer -->
    @include('component.footer')

    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>
    <!-- <script src="/js/navbar.js"></script> -->
    <script>
        window.onscroll = () => {
            const nav = document.querySelector('#navBar');
            if (this.scrollY <= 10) {
                nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-primary dark:md:bg-transparent bg-primary dark:bg-opacity-60    fixed w-full z-50';
            } else {
                nav.className = 'transition ease-in-out delay-200  border-gray-200 dark:bg-[#070a24] bg-[#070a24] dark:bg-opacity-60 backdrop-blur-md   fixed w-full z-50';
            }
        };

        document.getElementById('userButton').addEventListener('click', function() {
            var userModal = document.getElementById('userModal');
            userModal.classList.toggle('hidden');
        });

        function speakOnPageLoad() {
            var speech = new SpeechSynthesisUtterance();
            // Set the text to be spoken
            speech.text = "anda berada di halaman beranda";
            speech.lang = 'id-ID';
            // Use the default speech synthesizer
            var speechSynthesis = window.speechSynthesis;
            speechSynthesis.speak(speech);
        }

        //document.addEventListener('DOMContentLoaded', speakOnPageLoad());
    </script>
</body>

</html>