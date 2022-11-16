<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- <x-jet-welcome /> --}}
                <div class="m-10">
                     <div class="flex flex-col items-center justify-between">
                        <x-jet-application-logo class="w-80"/>
                     </div>
                     <div class="text-justify font-normal text-2xl">
                        <p class="m-8 ">
                            Avocado Judge es un juez en linea para la evaluación de codigo
                            con ello tus habilidades de pensamiento y codificación estaran en constante entrenamiento lo que proporcionara un crecimiento academico y personal.
                        </p>

                        <div class="flex flex-row ">
                            <div class=" flex flex-col">
                                <div>
                                    <p class="text-6xl  text-center text-green-500 font-bold p-8"> Entrena
                                    </p>
                                </div>
                                <div class="font-normal italic text-2xl text-center">
                                    <p>Resuelve problemas y mejora tus habilidades</p>
                                </div>
                            </div>

                            <div class="flex flex-col  m-10">
                                <img src="https://omegaup.com/media/homepage/problems_section.svg"/>
                            </div>

                        </div>

                        <div class="flex flex-row ">
                            <div class="flex flex-col  m-10">
                                <img src="https://omegaup.com/media/homepage/create_section.svg" />
                            </div>

                            <div class=" flex flex-col">
                                <div>
                                    <p class="text-6xl  text-center text-green-500 font-bold  p-8"> Analizate
                                    </p>
                                </div>
                                <div class="font-normal italic text-2xl text-center">
                                    <p>
                                        Observa tus envios anteriores y aprende de tu progreso
                                    </p>
                                </div>
                            </div>
                        </div>


                     </div>

                 </div>


            </div>
        </div>
    </div>
</x-app-layout>
