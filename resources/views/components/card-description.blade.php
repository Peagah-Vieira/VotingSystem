<div class="w-full max-w-full px-3 lg-max:mt-6 xl:w-4/12">
    <div
        class="relative flex flex-col h-full min-w-0 break-words bg-white border-0 shadow-soft-xl rounded-2xl bg-clip-border">
        <div class="p-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
            <div class="flex flex-wrap -mx-3">
                <div class="flex items-center w-full max-w-full px-3 shrink-0 md:w-8/12 md:flex-none">
                    <img src="{{$image}}"
                        class="inline-flex items-center justify-center w-12 h-12 mr-2 text-white transition-all duration-200 ease-in-out text-sm rounded-xl" />
                    <h6 class="mb-0">{{$surname}}</h6>
                </div>
            </div>
        </div>
        <div class="flex-auto p-4">
            <p class="leading-normal text-sm">
                {{$description}}
            </p>
            <hr class="h-px my-6 bg-transparent bg-gradient-to-r from-transparent via-white to-transparent" />
            <ul class="flex flex-col pl-0 mb-0 rounded-lg">
                <li
                    class="relative block px-4 py-2 pt-0 pl-0 leading-normal bg-white border-0 rounded-t-lg text-sm text-inherit">
                    <strong class="text-slate-700">
                        Full Name:</strong> &nbsp; {{$fullname}}
                </li>
                <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                    <strong class="text-slate-700">Mobile:</strong> &nbsp; {{$phone}}
                </li>
                <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                    <strong class="text-slate-700">
                        Email:</strong> &nbsp; {{$email}}
                </li>
                <li
                    class="relative block px-4 py-2 pl-0 leading-normal bg-white border-0 border-t-0 text-sm text-inherit">
                    <strong class="text-slate-700">
                        Location:</strong> &nbsp; {{$localization}}
                </li>
                <li class="relative block px-4 py-2 pb-0 pl-0 bg-white border-0 border-t-0 rounded-b-lg text-inherit">
                    <strong class="leading-normal text-sm text-slate-700">Social:</strong> &nbsp;
                    {{$social}}
                </li>
            </ul>
        </div>
    </div>
</div>