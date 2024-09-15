<div class="w-full mx-auto">
    @isset($title)
        <div class="w-full">
            {{ $title }}
        </div>
    @endisset

    <div class="relative flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
        <div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
            <div class="lg:flex items-center justify-between ">
                <div class="w-full lg:w-1/2">
                    {{ $headLeft }}
                </div>
                <div class="w-full lg:w-1/2">
                    {{ $headRight }}
                </div>
            </div>

        </div>
        <div class="p-0">
            <table class="w-full mt-4 text-left table-auto min-w-max">
                <thead>
                    {{ $header }}
                </thead>
                <tbody>
                    {{ $body }}
                </tbody>
            </table>
        </div>
        @isset($footer)
            <div class="w-full">
                {{ $footer }}
            </div>
        @endisset
    </div>
</div>
