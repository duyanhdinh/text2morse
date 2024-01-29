<div class="relative h-full">
    <textarea
        x-ref="output"
        class="absolute w-full resize-none rounded-md bg-gray-200 h-full text-[18px] pb-[40px] whitespace-pre-wrap"
        readonly
    >{{$this->output}}</textarea>

    <div
        class="absolute bottom-0 w-full h-[40px] bg-gray-200 pr-[20px] rounded-b-md border border-gray-400 border-t-0 flex items-center"
        x-data="{ open: false }"
    >
        <div class="absolute end-0 pr-[12px]">
            <x-svg.copy
                class="w-[20px] h-[20px] cursor-pointer"
                fill="#222222"
                @click="navigator.clipboard.writeText($refs.output.value);
                    open = true;
                    setTimeout(() => open = false, 3000);"
            />
        </div>

        <template
            x-teleport="body"
        >
            <div
                x-show="open"
                class="absolute bottom-[20px] left-[12px] bg-green-200 pl-4 pr-12 py-3"
            >
                Copied to clipboard
            </div>
        </template>
    </div>
</div>
