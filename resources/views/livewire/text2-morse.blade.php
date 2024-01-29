<div class="mt-[20px]">
    <div class="w-full flex mb-[4px] text-[20px] font-medium">
        <div class="flex-1 text-center" x-text="$wire.encode ? 'Text' : 'Morse'"></div>
        <div
            class="w-[16px] cursor-pointer top-0 flex justify-center items-center"
            @click="$wire.changeWave()"
        >
            <x-svg.arrow-left-right class="w-[14px]" fill="#555555" />
        </div>
        <div class="flex-1 text-center" x-text="!$wire.encode ? 'Text' : 'Morse'"></div>
    </div>
    <div class="w-full h-[80vh] flex space-x-[12px] leading-[28px]">
        <div class="flex-1 h-full">
            <livewire:cmpt.input-area
            />
        </div>
        <div class="flex-1 h-full">
            <livewire:cmpt.output-area
            />
        </div>
    </div>
</div>
