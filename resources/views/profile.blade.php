<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    {{-- {{substr(request()->route()->getPrefix(), 1, strlen(request()->route()->getPrefix()) - 1)}} --}}

    <div class="py-10">
        <div class=" mx-auto">
            <div class="bg-slate-100 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-900">
                    <div class="row-start-1 col-span-full px-2">
                        <div class="bg-white px-10 py-20">
                            <div class="flex flex-col">
                                @if(!empty(session("success-edit")))
                                    <div id="flash" class="bg-green-200 text-green-700 text-lg font-bold text-center transition-opacity duration-1000">{{ session('success-edit') }}</div>
                                @endif
                                <script>
                                    setTimeout(() => {
                                        document.getElementById("flash").classList.toggle("opacity-0");
                                    }, 4000);
                                </script>
                                <div id="info-akun" class="flex item-center gap-10">
                                    <div id="akun" class="flex flex-col gap-2 shadow-xl p-10">
                                        <div id="identitas-akun" class="flex flex-row gap-10 items-center bg-slate-200 px-5 py-2 rounded-lg">
                                            <div id="gambar-akun" class="rounded-full h-20 w-20">
                                                @if(Auth::user()->gambarUrl)
                                                    <img class="" src="{{ @asset(Auth::user()->gambarUrl) }}">
                                                @else
                                                    <img class="object-contain" src="{{ @asset('storage\images\user.png') }}">
                                                @endif
                                            </div>
                                            <div id="nama-akun" class="text-lg font-bold bg-slate-200 px-10 py-5 text-center flex flex-col gap-5">
                                                @if(Auth::check())
                                                    <div id="nama" class="">{{Auth::user()->name}}</div>
                                                @endif
                                                <div id="btn-edit" class="bg-cyan-400 hover:bg-cyan-700  px-5 py-1 self-start rounded-lg">
                                                    <a href="{{route(substr(request()->route()->getPrefix(), 1, strlen(request()->route()->getPrefix()) - 1).'.profile.edit')}}" class="px-5 py-2 hover:text-black">Edit</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="btn-logout" class="bg-red-400 hover:bg-red-700 text-lg h font-bold py-2 text-center rounded-lg">
                                            <a href="{{ route('logout.user') }}" class="px-10 py-2 hover:text-black">Logout</a>
                                        </div>
                                        <div id="btn-back" class="bg-green-400 hover:bg-green-700 text-lg  font-bold py-2 text-center rounded-lg">
                                            <a href="{{ route(substr(request()->route()->getPrefix(), 1, strlen(request()->route()->getPrefix()) - 1).'.index') }}" class="px-10 py-2 hover:text-black">Kembali</a>
                                        </div>
                                    </div>
                                    <div id="deskripsi-akun" class="bg-white p-5 rounded-lg shadow-xl">
                                        <div >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque quod enim ex dolor nam, dolores, commodi unde dolore ut sed repudiandae, doloremque a maxime accusamus adipisci nobis alias! Repellat, temporibus!
                                        Maiores molestias qui amet earum temporibus? Officiis natus, quasi asperiores aliquam repudiandae quod recusandae sit perferendis harum repellendus consequuntur sint inventore ullam saepe. Commodi minima consequatur impedit quasi id minus.
                                        Vero eum, totam quis similique officia consequuntur, magnam eveniet fuga molestias repudiandae tenetur expedita natus enim, sed vitae numquam inventore ad optio. In, corrupti molestias? Dicta quas illum quisquam fuga.
                                        Hic sunt rerum itaque, quos labore illo numquam. Doloribus blanditiis dolores maiores error, fugit ratione unde enim inventore eos placeat delectus iure temporibus veritatis ea atque laudantium ducimus neque voluptate!
                                        Vel, molestiae error. Iure, reprehenderit iste. Aut, quos. Molestias adipisci atque officiis officia eum ipsum sunt tenetur similique autem. Necessitatibus expedita id ipsam doloremque corrupti ab asperiores quaerat sed in.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
