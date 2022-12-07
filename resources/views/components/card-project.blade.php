<div class="w-full max-w-full px-3 mb-6 md:w-6/12 md:flex-none xl:mb-0 xl:w-3/12">
    <div
        class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border">
        <div class="relative">
            <a class="block shadow-xl rounded-2xl">
                <img src="{{ $imglink }}" alt="img-blur-shadow"
                    class="max-w-full shadow-soft-2xl rounded-2xl" />
            </a>
        </div>

        <div class="flex-auto px-1 pt-6">
            <p
                class="relative z-10 mb-2 leading-normal text-transparent bg-gradient-to-tl from-gray-900 to-slate-800 text-sm bg-clip-text">
                {{$projectname}}</p>
            <h5>{{$title}}</h5>
            <p class="mb-6 leading-normal text-sm">{{$description}}</p>
            <div class="flex items-center justify-between">
                <a href="{{$link}}"
                    class="inline-block px-8 py-2 mb-0 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer leading-pro ease-soft-in text-xs hover:scale-102 active:shadow-soft-xs tracking-tight-soft border-gray-500 text-gray-500 hover:border-gray-500 hover:bg-transparent hover:text-gray-500 hover:opacity-75 hover:shadow-none active:bg-gray-500 active:text-white active:hover:bg-transparent active:hover:text-gray-500">
                    View Project
                </a>
            </div>
        </div>
    </div>
</div>