<div class="relative h-full">
    <textarea
        x-ref="output"
        class="absolute w-full resize-none rounded-md bg-gray-200 h-full text-[18px] pb-[40px] whitespace-pre-wrap"
        readonly
    >{{$this->output}}</textarea>

    <div
        class="absolute bottom-0 w-full h-[40px] bg-gray-200 pr-[20px] rounded-b-md border border-gray-400 border-t-0 flex items-center"
    >
        <div class="absolute end-0 pr-[12px]">
            <x-svg.copy
                class="w-[20px] h-[20px] cursor-pointer"
                fill="#222222"
                @click="$wire.copyToClipboard()"
            />
        </div>

        <livewire:cmn.flash-ms
            flashEvent="copy-success"
            message="Copied to clipboard!"
        />
    </div>
</div>
