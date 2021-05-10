<footer class="footer pt-12 w-full">
    <div class="container mx-auto pb-12">
        <div class="grid grid-cols-12 gap-y-5 md:items-center">
            <div class="col-span-12 md:col-span-4">
                <div class="grid grid-col-12 justify-items-center md:justify-items-end gap-y-2">
                    <div class="col-span-12 flex items-center gap-y-3">
                        <img class="h-12 w-auto" src="{{ asset('img/logo.svg') }}" alt="ImecEva">
                        <h5 class="font-mada text-white text-5xl ml-3">Ad<span class="text-yellow-400 font-bold">Form</span></h5>
                    </div>
                    <div class="col-span-12">
                        <p class="text-white opacity-75 leading-tight text-center md:text-right">Instrumento de identificación<br> de textos escolares.</p>
                    </div>
                </div>
            </div>
            {{-- <div class="col-span-12 md:col-span-8">
                <div class="grid grid-cols-12 justify-items-center items-center">
                    <div class="col-span-6 text-left text-white">
                        <h5 class="font-bold">Accesos rápidos</h5>
                        <ul class="ml-3">
                            <li><a class="grey-text text-lighten-3" href="{{ route('evaluaciones.index') }}">Evaluación</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ route('evaluaciones.show', $dato->empleado_id.'_2') }}">Autoevaluación</a></li>
                        </ul>
                    </div>
                    <div class="col-span-6 text-left text-white">
                        <h5 class="font-bold">Información</h5>
                        <ul class="ml-3">
                            <li><a class="grey-text text-lighten-3" target="_blank" href="https://ienmlogistica.ienm.com.co/">Home</a></li>
                            <li><a class="grey-text text-lighten-3" target="_blank" href="https://imecplus.ienm.com.co/">Imec +</a></li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container mx-auto py-4 relative md:flex flex-row items-center w-full justify-between">
            <p class="font-normal text-white opacity-50 text-left text-xs ml-3">© 2021 Glaucus Diseño y Desarrollo Digital</p>
            <p class="font-normal text-white opacity-40 md:text-right text-xs ml-3 md:mr-3 "> AdForm echo con <span class="inline-flex justify-center items-end text-red-600"><svg class="w-3 h-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fillRule="evenodd" d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z" clipRule="evenodd" /></svg></span></p>
      </div>
    </div>
</footer>
