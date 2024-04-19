<div class="w-full bg-white  p-3 dark:bg-slate-600">
    <div class="container mx-auto">
        <div class="flex justify-center items-end"> <!-- Mengubah justify-end menjadi justify-center -->
            <div class="flex flex-row items-end gap-2">
                <form action="{{ $url }}" method="GET"
                    class="flex items-end gap-1 w-52 max-w-lg mx-auto transition-all duration-500 ease-in-out focus-within:w-full active:w-full">
                    <input type="text" placeholder="Cari disini..."
                        class="p-2 rounded-lg text-black bg-white focus:outline-none focus:ring-teal-500 text-sm w-full md:w-96"
                        name="search" value="{{ request()->search }}" />
                    <button type="submit"
                        class="p-2 rounded-lg text-white bg-teal-500 focus:outline-none focus:ring-1 focus:ring-slate-200 text-sm ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-search w-5 h-5"
                            width="24" height="24" viewBox="0 0 24 24" stroke-width="1.25" stroke="currentColor"
                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <circle cx="10" cy="10" r="7"></circle>
                            <line x1="21" y1="21" x2="15" y2="15"></line>
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
