@extends('layouts.frontend.app', ['title' => 'Review'])

@section('content')


    <section class="py-24 bg-gray-100  lg:py-32 dark:bg-slate-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="max-w-2xl mx-auto text-center">
                
                <h2 class="text-3xl font-bold leading-tight text-black sm:text-4xl lg:text-5xl dark:text-white">TESTIMONI PELANGAN</h2>
                <p class="max-w-lg mx-auto mt-4 text-base leading-relaxed text-gray-600 dark:text-white">Temukan kegembiraan sejati melalui
                    pengalaman belajar online dengan kursus-kursus yang ditawarkan oleh Unusia. Dengarkan kesaksian langsung
                    dari para peserta yang telah menemukan makna baru dan pengetahuan yang berharga melalui kelas-kelas yang
                    inspiratif dan mendalam ini</p>
            </div>

            <div class="grid grid-cols-1 gap-6 px-4 mt-12 sm:px-0 xl:mt-20 xl:grid-cols-4 sm:grid-cols-2">
                @foreach ($reviews as $review)
                    <div class="overflow-hidden bg-white rounded-md">
                        <div class="px-5 py-6">
                            <div class="flex items-center justify-between">
                                <img class="flex-shrink-0 object-cover w-10 h-10 rounded-full"
                                    src="{{ $review->user->avatar }}" alt="" />
                                <div class="min-w-0 ml-3 mr-auto">
                                    <p class="text-base font-semibold text-black truncate">{{ $review->user->name }}</p>
                                    <p class="text-sm text-gray-600 truncate">
                                        {{ Carbon\Carbon::parse($review->created_at)->diffForHumans() }}</p>
                                </div>
                            </div>
                            <blockquote class="mt-5">
                                <p class="text-base text-gray-800">
                                    {{ $review->review }}
                                </p>
                                <div class="flex items-center space-x-2 text-yellow-300">
                                    @for ($i = 1; $i <= 5; $i++)
                                        @if ($i <= $review->rating)
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-star fill-yellow-300 w-5 h-5" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                </path>
                                            </svg>
                                        @else
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-tabler icon-tabler-star stroke-current text-gray-400 w-5 h-5" width="24"
                                                height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path
                                                    d="M12 17.75l-6.172 3.245l1.179 -6.873l-5 -4.867l6.9 -1l3.086 -6.253l3.086 6.253l6.9 1l-5 4.867l1.179 6.873z">
                                                </path>
                                            </svg>
                                        @endif
                                    @endfor
                                </div>                                                           
                            </blockquote>
                            <div class=" pt-3 text-black text-sm flex flex-col gap-2">
                                <p class="flex items-center gap-1">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="icon icon-tabler icon-tabler-message-2 w-5 h-5" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path
                                            d="M12 20l-3 -3h-2a3 3 0 0 1 -3 -3v-6a3 3 0 0 1 3 -3h10a3 3 0 0 1 3 3v6a3 3 0 0 1 -3 3h-2l-3 3">
                                        </path>
                                        <line x1="8" y1="9" x2="16" y2="9"></line>
                                        <line x1="8" y1="13" x2="14" y2="13"></line>
                                    </svg>
                                    Review Course :
                                </p>
                                <a href="{{ route('course.show', $review->course->slug) }}"
                                    class="hover:text-teal-500 transition-all font-semibold">
                                    {{ $review->course->name }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
