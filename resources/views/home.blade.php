<x-app>
    @include('partials.banner')
    
    <div class="p-10">
        <div class="container flex justify-between">
            <div class="w-[calc(100%-450px)]">
                <h1 class=" text-secondary font-bold">Pourquoi Nous ?</h1>
                <h2 class="text-5xl font-bold my-6 text-tersiaire ">Nous sommes a votre service pour la reuisite de vos projets </h2>
                <p class="w-[80%] my-10">
                    METOGUEZ GROUP est une entreprise de Services Professionnels avec une Expertise Avérée dans divers secteurs d’activité, notament en  Conseil & Gestion, Nettoyage et Services, Services à la Personne.
                </p>
                <div>
                    <button class="nav-btn bg-secondary bg-opacity-80 uppercase font-bold border-4 border-secondary text-white">Nos réalisations <i class="fa-solid fa-globe ml-4"></i></button>
                    <button class="nav-btn bg-secondary bg-opacity-20 uppercase font-bold border-4 text-secondary">Demander votre devis <i class="fa-regular fa-file-lines ml-4"></i></button>
                </div>
            </div>
            <img class="w-[400px] rounded-md" src="{{ asset('img/i2.jpg') }}" alt="">
        </div>
    </div>

    <div class="my-10">
        <h1 class="text-secondary font-bold text-center flex items-center justify-center">
           <span class="h-1 w-14 bg-primary inline-block mr-3"></span> Que Proposons nous ?
        </h1>
        <h2 class="text-4xl text-center font-bold mt-5 mb-2">Nos Prestations Professionnelles</h2>
        <p class="text-center mb-4">
            Nous avons plusieurs types de prestations pour faciliter la réussite de vos événements.
        </p>
        <div class="container px-10 text-center">
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white shadow-md">
                    <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/banner.jpg') }}" alt=""></div>
                    <div class="p-4">
                        <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Création & Entretien des piscines</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut distinctio itaque facere, nobis eius aspernatur.</p>
                    </div>    
                </div>
                <div class="bg-white shadow-md">
                    {{-- <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/produits-piscine.jpg') }}" alt=""></div> --}}

                    <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/v2.jpeg') }}" alt=""></div>
                    <div class="p-4">
                        <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Vente des produits d'entretien</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut distinctio itaque facere, nobis eius aspernatur.</p>
                    </div>    
                </div>
                <div class="bg-white shadow-md">
                    <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/RAISONS1C.jpg') }}" alt=""></div>
                    <div class="p-4">
                        <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Plomberie</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut distinctio itaque facere, nobis eius aspernatur.</p>
                    </div>    
                </div>
                <div class="bg-white shadow-md">
                    <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/b3.jpg') }}" alt=""></div>
                    <div class="p-4">
                        <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Réalisation des forages & Traitement des eaux</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut distinctio itaque facere, nobis eius aspernatur.</p>
                    </div>    
                </div>
                <div class="bg-white shadow-md">
                    <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/PEINTRE.jpg') }}" alt=""></div>
                    <div class="p-4">
                        <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Peinture bâtiment</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut distinctio itaque facere, nobis eius aspernatur.</p>
                    </div>    
                </div>
                <div class="bg-white shadow-md">
                    <div class="relative h-[180px]"><img class="absolute w-full h-full object-cover" src="{{ asset('img/v1.jpg') }}" alt=""></div>
                    <div class="p-4">
                        <h1 class="text-xl mb-3 font-bold after:block after:w-[40%] after:mt-1 after:h-[2px] after:rounded-md after:opacity-20 after:bg-secondary after:mx-auto">Vidange des fosses</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut distinctio itaque facere, nobis eius aspernatur.</p>
                    </div>    
                </div>
            </div>
        </div>
    </div>

    <div class="my-10">
        <h1 class="text-secondary font-bold text-center flex items-center justify-center">
           <span class="h-1 w-5 bg-primary inline-block mr-3"></span>Produits
        </h1>
        <h2 class="text-4xl text-center font-bold mt-5 mb-2">Nos différents produits</h2>
        <p class="text-center mb-4">
            Nous vous offrons une variété de produit d'entretien et de construction pour vos piscines à bas prix
        </p>
        <div class="container px-10 text-center">
            <div class="grid grid-cols-3 gap-6">
                <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#">
                        <img class="rounded-t-lg p-8" src="{{ asset('img/debit-Ajm.jpg') }}" alt="product image">
                    </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">Apple Watch Series 7
                                    Pompe supp leo 220v/1"1x1 ajm75</h3>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300 opacity-30" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">188.000 FCFA</span>
                                <a href="#"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Commander</a>
                            </div>
                        </div>
                </div>

                <div class="bg-white shadow-md rounded-lg max-w-sm dark:bg-gray-800 dark:border-gray-700">
                    <a href="#" class="block relative h-[300px]">
                        <img class="rounded-t-lg p-8 absolute h-full w-full object-cover" src="{{ asset('img/sup.jpeg') }}" alt="product image">
                    </a>
                        <div class="px-5 pb-5">
                            <a href="#">
                                <h3 class="text-gray-900 font-semibold text-xl tracking-tight dark:text-white">Apple Watch Series 7
                                    Pompe supp leo 220v/1"1x1 ajm75</h3>
                            </a>
                            <div class="flex items-center mt-2.5 mb-5">
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <svg class="w-5 h-5 text-yellow-300 opacity-30" fill="currentColor" viewBox="0 0 20 20"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                    </path>
                                </svg>
                                <span class="bg-blue-100 text-blue-800 text-xs font-semibold mr-2 px-2.5 py-0.5 rounded dark:bg-blue-200 dark:text-blue-800 ml-3">5.0</span>
                            </div>
                            <div class="flex items-center justify-between">
                                <span class="text-3xl font-bold text-gray-900 dark:text-white">599.000 FCFA</span>
                                <a href="#"
                                    class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Commander</a>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </div>

    <div class="devis mb-5">
        <div class="container py-24 text-white">
            <h1 class="text-5xl font-bold">Besoin d'un <span class="text-primary"> Devis Gratuit ?</span></h1>
            <p class="w-1/3 my-5">
                Vous avez besoin de nos services pour vous simplifier la vie? N’hesitez pas à demander un Devis Gratuitement en cliquant ici.
            </p>
            <div>
                <button class="nav-btn py-3 bg-secondary uppercase font-bold  text-white">Demander votre devis <i class="fa-regular fa-file-lines ml-4"></i></button>
            </div>
        </div>
    </div>

    <div class="bg-white p-10 relative h-[500px]">
        <div class="bg-white absolute top-2 w-[500px] shadow-md right-0 z-50 p-10 flex flex-col">
            <h1 class="bg-primary p-4 text-white text-xl mb-2 font-bold"><i class="fa-solid fa-paper-plane  mr-3"></i> Emplacement du bureau </h1>
            <h3>Nous sommes situés en face de socalu</h3>
            <div class="h-[1px] w-full bg-gray-500 my-4"></div>
            <div class="flex flex-col space-y-4">
                <h2 class="font-bold mt-5">Douala</h2>
                <a href="#" class="">
                    <i class="fa-solid fa-location-dot text-secondary mr-2"></i>
                    <span>Douala Akwa , en face de socalu</span>
                  </a>
                  <a href="#" class=""><i class="fa-solid fa-envelope text-secondary mr-2"></i> solumatgn@gmail.com</a>
                  <a href="#" class=""><i class="fa-solid fa-phone text-secondary mr-2 "></i> (+237) 233 428 145/ 673 535 357 / 691 799 141</a>
            </div>
        </div>
        <iframe class="absolute top-0 left-0 right-0 bottom-0 w-full h-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3979.8448381372664!2d9.7032222!3d4.0520518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1061126028e46dbb%3A0xad11b22c2778b430!2sSOCALU!5e0!3m2!1sfr!2scm!4v1664107014034!5m2!1sfr!2scm" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</x-app>