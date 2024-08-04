<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/7a3bb47c80.js" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Exo:ital,wght@0,100..900;1,100..900&display=swap');
        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    <title>Bogor Modified - Bengkel Cat</title>
    @vite('resources/css/app.css')
</head>
<body id="home" class="bg-night font-exo text-seasalt">
    <nav class="bg-night shadow-xl h-20 w-full flex fixed rounded-b-xl">
        <div class="container mx-80 flex justify-between items-center">
            <div class="flex justify-center items-center">
                <a href="" class="font-medium hover:text-celtic-blue transition duration-500">
                    <div class="flex justify-center items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                        </svg>
                        <p>Bogor Modified</p>
                    </div>
                </a>
            </div>
            <div class="flex gap-10">
                <a href="#home" class="font-medium hover:text-celtic-blue transition duration-500">Home</a>
                <a href="#about" class="font-medium hover:text-celtic-blue transition duration-500">About</a>
                <a href="#catalog" class="font-medium hover:text-celtic-blue transition duration-500">Catalog</a>
                <a href="#maps" class="font-medium hover:text-celtic-blue transition duration-500">Maps</a>
            </div>
        </div>
    </nav>
    <a href="">
        <div class="bg-celtic-blue rounded-md fixed flex justify-center items-center size-10 right-14 bottom-14">
            <i class="text-night text-center fa-solid fa-arrow-up"></i>
        </div>
    </a>
    <main class="py-20">
        <!-- About -->
        <div id="about" class="mx-80 my-20">
            <div class="flex gap-20">
                <div class="w-1/2">
                    <img src="img/cover.jpg" alt="" class="h-96 w-full object-none object-center rounded-xl">
                </div>
                <div class="w-1/2">
                    <div class="my-8 space-y-2">
                        <p class="text-2xl font-semibold">Bogor Modified</p>
                        <p class="font-medium">Sejak 2018 selalu dipercaya konsumen sebagai bengkel cat denga layanan prima</p>
                    </div>
                    <div class="my-8 text-justify">
                        <p>See the future with high-performance electric cars produced by renowned brands. They feature futuristic builds and designs with new and innovative platforms that last a long time.</p>
                    </div>
                    <div class=" flex justify-center items-center gap-10">
                        <div class="h-36 w-1/3 border-celtic-blue border-b-2 flex justify-center items-center rounded-xl hover:border-celtic-blue hover:border-2 transition duration-500">
                            <div class="text-center">
                                <p>500+</p>
                                <p>Pengerjaan Motor</p>
                            </div>
                        </div>
                        <div class="h-36 w-1/3 border-celtic-blue border-b-2 flex justify-center items-center rounded-xl hover:border-celtic-blue hover:border-2">
                            <div class="text-center">
                                <p>500+</p>
                                <p>Pengerjaan Motor</p>
                            </div>
                        </div>
                        <div class="h-36 w-1/3 border-celtic-blue border-b-2 flex justify-center items-center rounded-xl hover:border-celtic-blue hover:border-2">
                            <div class="text-center">
                                <p>500+</p>
                                <p>Pengerjaan Motor</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Maps -->
        <div class="mx-80 py-20" id="maps">
            <div class="flex justify-center items-center text-xl font-semibold">Lokasi kami</div>
                <div class="h-96 w-1/2 pr-10">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.7842925990763!2d106.91817517573364!3d-6.421755662802635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69952904e00e4b%3A0x3666ca5f3d5e6883!2sBogor%20Modified!5e0!3m2!1sid!2sid!4v1722420546529!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="h-full w-full rounded-tl-2xl rounded-br-2xl border-none"></iframe>
                </div>
                <div class="w-1/2 pl-10">
                    <div class="flex">
                        <div class="w-1/12">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1 1 15 0Z" />
                            </svg>
                        </div>
                        <div class="w-5/6">
                            <p>Jl. Garuda Raya, Bojong Nangka, Kec. Gn. Putri, Kabupaten Bogor, Jawa Barat 16963</p>
                        </div>
                    </div>
                </div>
            
            <a href="https://maps.app.goo.gl/ocpRUX8e4BiiLNFa7" target="blank">Klik</a>
        </div>
    </main>
    <footer class="">
        <div class="px-80 py-20">
            <div class="py-5 flex">
                <div class="w-2/5">
                    <a href="" class="font-medium hover:text-celtic-blue transition duration-500">
                        <div class=" flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008Z" />
                            </svg>
                            <p class="text-xl font-medium">Bogor Modified</p>
                        </div>
                    </a>
                </div>
                <div class="w-1/5">
                    <p class="text-xl font-medium">Company</p>
                </div>
                <div class="w-1/5">
                    <p class="text-xl font-medium">Information</p>
                </div>
                <div class="w-1/5">
                    <p class="text-xl font-medium">Follow us</p>
                </div>
            </div>
            <div class="flex">
                <div class="w-2/5 text-french-gray">
                    <p class="w-64">We offer the best electric cars of the most recognized brands in the world.</p>
                </div>
                <div class="w-1/5">
                    <ul class="text-french-gray">
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">About</a>
                        </li>
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">Cars</a>
                        </li>
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">History</a>
                        </li>
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">Shop</a>
                        </li>
                    </ul>
                </div>
                <div class="w-1/5">
                    <ul class="text-french-gray">
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">Request a quote</a>
                        </li>
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">Find a dealer</a>
                        </li>
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">Contact us</a>
                        </li>
                        <li class="my-2 hover:text-seasalt transtition duration-500"> 
                            <a href="">Services</a>
                        </li>
                    </ul>
                </div>
                <div class="w-1/5">
                    <div class="text-french-gray">
                        <a href="https://www.instagram.com/bmpainting30" target="blank">
                            <i class="fa-brands fa-instagram text-2xl hover:text-seasalt transition duration-500"></i>
                        </a>
                        <a href="https://www.youtube.com/@Bmpainting30" target="blank">
                            <i class="fa-brands fa-youtube mx-5 text-2xl hover:text-seasalt transition duration-500"></i>
                        </a>
                        <a href="https://www.tiktok.com/@bogormodified01" target="blank">
                            <i class="fa-brands fa-tiktok text-2xl hover:text-seasalt transition duration-500"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="h-28 flex justify-center items-center text-xs font-extralight ">
            <p>© Created by <a href="" class="ml-1 font-medium">rafliardanaaa</a>. All rights reserved</p>
        </div>
    </footer>
</body>
</html>