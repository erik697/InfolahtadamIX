@extends('blogs.template.main')
@section('title', 'Infolahtadam IX')
@section('content')
<div class="min-h-full pt-32">
    <div class="mx-2 lg:mx-32">
        {{-- <div class="p-12 border shadow-2xl rounded-2xl overflow-x-scroll overflow-y-scroll my-32">
             <div class="items-center justify-center flex">
            <div class="text-center">
                <div class="flex flex-col justify-center items-center">
                    <div class="w-16">
                        <img class="block rounded-full m-auto shadow-md" alt="Duc Sun"
                            src="https://randomuser.me/api/portraits/men/12.jpg" />
                    </div>
                    <div class="text-gray-600">
                        <p>Duc Sun</p>
                        <p>ceo</p>
                    </div>
                </div>
                <ul class="flex flex-row mt-10 justify-center">
                    <div class="-mt-10 border-l-2 absolute h-10 border-gray-400"></div>
                    <li class="relative p-6">
                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                            style="left: 50%; right: 0px;"></div>
                        <div class="relative flex justify-center">
                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                            <div class="text-center">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="w-16">
                                        <img class="block rounded-full m-auto shadow-md" alt="Leo Six"
                                            src="https://randomuser.me/api/portraits/men/83.jpg" />
                                    </div>
                                    <div class="text-gray-600">
                                        <p>Leo Six</p>
                                        <p>Management</p>
                                    </div>
                                </div>
                                <ul class="flex flex-row mt-10 justify-center">
                                    <div class="-mt-10 border-l-2 absolute h-10 border-gray-400"></div>
                                    <li class="relative p-6">
                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                            style="left: 50%; right: 0px;"></div>
                                        <div class="relative flex justify-center">
                                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                            </div>
                                            <div class="text-center">
                                                <div class="flex flex-col justify-center items-center">
                                                    <div class="w-16">
                                                        <img class="block rounded-full m-auto shadow-md"
                                                            alt="Tab Han"
                                                            src="https://randomuser.me/api/portraits/men/46.jpg" />
                                                    </div>
                                                    <div class="text-gray-600">
                                                        <p>Tab Han</p>
                                                        <p>Project Manager</p>
                                                    </div>
                                                </div>
                                                <ul class="flex flex-row mt-10 justify-center">
                                                    <div
                                                        class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                    </div>
                                                    <li class="relative p-6">
                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                            style="left: 50%; right: 0px;"></div>
                                                        <div class="relative flex justify-center">
                                                            <div
                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                            </div>
                                                            <div class="text-center">
                                                                <div
                                                                    class="flex flex-col justify-center items-center">
                                                                    <div class="w-16">
                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                            alt="Daniel Zhou"
                                                                            src="https://randomuser.me/api/portraits/men/76.jpg" />
                                                                    </div>
                                                                    <div class="text-gray-600">
                                                                        <p>Daniel Zhou</p>
                                                                        <p>Team Lead</p>
                                                                    </div>
                                                                </div>
                                                                <ul class="flex flex-row mt-10 justify-center">
                                                                    <div
                                                                        class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                                    </div>
                                                                    <li class="relative p-6">
                                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                            style="left: 50%; right: 0px;">
                                                                        </div>
                                                                        <div
                                                                            class="relative flex justify-center">
                                                                            <div
                                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <div
                                                                                    class="flex flex-col justify-center items-center">
                                                                                    <div class="w-16">
                                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                                            alt="Patrick Wang"
                                                                                            src="https://randomuser.me/api/portraits/men/55.jpg" />
                                                                                    </div>
                                                                                    <div class="text-gray-600">
                                                                                        <p>Patrick Wang</p>
                                                                                        <p>Developer</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="relative p-6">
                                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                            style="left: 0px; right: 50%;">
                                                                        </div>
                                                                        <div
                                                                            class="relative flex justify-center">
                                                                            <div
                                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <div
                                                                                    class="flex flex-col justify-center items-center">
                                                                                    <div class="w-16">
                                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                                            alt="Jonsen Li"
                                                                                            src="https://randomuser.me/api/portraits/men/41.jpg" />
                                                                                    </div>
                                                                                    <div class="text-gray-600">
                                                                                        <p>Jonsen Li</p>
                                                                                        <p>Developer</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="relative p-6">
                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                            style="left: 0px; right: 0px;"></div>
                                                        <div class="relative flex justify-center">
                                                            <div
                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                            </div>
                                                            <div class="text-center">
                                                                <div
                                                                    class="flex flex-col justify-center items-center">
                                                                    <div class="w-16">
                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                            alt="Derek Hu"
                                                                            src="https://randomuser.me/api/portraits/men/44.jpg" />
                                                                    </div>
                                                                    <div class="text-gray-600">
                                                                        <p>Derek Hu</p>
                                                                        <p>Team Lead</p>
                                                                    </div>
                                                                </div>
                                                                <ul class="flex flex-row mt-10 justify-center">
                                                                    <div
                                                                        class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                                    </div>
                                                                    <li class="relative p-6">
                                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                                            style="left: 50%; right: 50%;">
                                                                        </div>
                                                                        <div
                                                                            class="relative flex justify-center">
                                                                            <div
                                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                                            </div>
                                                                            <div class="text-center">
                                                                                <div
                                                                                    class="flex flex-col justify-center items-center">
                                                                                    <div class="w-16">
                                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                                            alt="Alfie Zu"
                                                                                            src="https://randomuser.me/api/portraits/men/25.jpg" />
                                                                                    </div>
                                                                                    <div class="text-gray-600">
                                                                                        <p>Alfie Zu</p>
                                                                                        <p>Developer</p>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="relative p-6">
                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                            style="left: 0px; right: 50%;"></div>
                                                        <div class="relative flex justify-center">
                                                            <div
                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                            </div>
                                                            <div class="text-center">
                                                                <div
                                                                    class="flex flex-col justify-center items-center">
                                                                    <div class="w-16">
                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                            alt="Lennis Chan"
                                                                            src="https://randomuser.me/api/portraits/men/30.jpg" />
                                                                    </div>
                                                                    <div class="text-gray-600">
                                                                        <p>Lennis Chan</p>
                                                                        <p>Team Lead</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="relative p-6">
                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                            style="left: 0px; right: 50%;"></div>
                                        <div class="relative flex justify-center">
                                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                            </div>
                                            <div class="text-center">
                                                <div class="flex flex-col justify-center items-center">
                                                    <div class="w-16">
                                                        <img class="block rounded-full m-auto shadow-md"
                                                            alt="Peter Miao"
                                                            src="https://randomuser.me/api/portraits/men/54.jpg" />
                                                    </div>
                                                    <div class="text-gray-600">
                                                        <p>Peter Miao</p>
                                                        <p>Project Manager</p>
                                                    </div>
                                                </div>
                                                <ul class="flex flex-row mt-10 justify-center">
                                                    <div
                                                        class="-mt-10 border-l-2 absolute h-10 border-gray-400">
                                                    </div>
                                                    <li class="relative p-6">
                                                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                                                            style="left: 50%; right: 50%;"></div>
                                                        <div class="relative flex justify-center">
                                                            <div
                                                                class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0">
                                                            </div>
                                                            <div class="text-center">
                                                                <div
                                                                    class="flex flex-col justify-center items-center">
                                                                    <div class="w-16">
                                                                        <img class="block rounded-full m-auto shadow-md"
                                                                            alt="Peter Ming"
                                                                            src="https://randomuser.me/api/portraits/men/90.jpg" />
                                                                    </div>
                                                                    <div class="text-gray-600">
                                                                        <p>Peter Ming</p>
                                                                        <p>Team Lead</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="relative p-6">
                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                            style="left: 0px; right: 0px;"></div>
                        <div class="relative flex justify-center">
                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                            <div class="text-center">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="w-16">
                                        <img class="block rounded-full m-auto shadow-md" alt="Shi Ten"
                                            src="https://randomuser.me/api/portraits/men/43.jpg" />
                                    </div>
                                    <div class="text-gray-600">
                                        <p>Shi Ten</p>
                                        <p>HR</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="relative p-6">
                        <div class="border-t-2 absolute h-8 border-gray-400 top-0"
                            style="left: 0px; right: 50%;"></div>
                        <div class="relative flex justify-center">
                            <div class="-mt-6 border-l-2 absolute h-6 border-gray-400 top-0"></div>
                            <div class="text-center">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="w-16">
                                        <img class="block rounded-full m-auto shadow-md" alt="Shawn Mong"
                                            src="https://randomuser.me/api/portraits/men/97.jpg" />
                                    </div>
                                    <div class="text-gray-600">
                                        <p>Shawn Mong</p>
                                        <p>admin</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
        <div class=" bg-green-800 text-white my-4">
            <div class="px-4 py-2">
                Stuktur Organisasi
            </div>
        </div>
        <img src="{{ asset('images/organitation.jpeg') }}" class="w-full h-96 mb-32" alt="">
        <div class="grid grid-cols-1 lg:grid-cols-4 gap-6 my-14 lg:my-14">

            @foreach ( $pejabats as $pejabat )
           
                <div class="w-full">
                    <div class="p-4 border rounded-lg border-slate-200 shadow">
                        <div class="px-10 h-52 mb-5 lg:h-56 overflow-hidden">
                            <img class="rounded-lg object-fill lg:h-56 w-full" class="w-full h-52 lg:h-56" src="{{ asset('') }}/Personel/{{ $pejabat->img_url }}">
                        </div>
                            <p class="text-xl text-center">{{ $pejabat->name }}</p>
                            <p class="text-md text-slate-500 text-center">{{ $pejabat->position->name }}</p>
                            <p class="text-sm text-slate-300 text-center">{{ $pejabat->period_start }} - {{ $pejabat->period_end }}</p>
                    </div>

            </div>
            @endforeach
            
   
        </div>
    </div>
</div>