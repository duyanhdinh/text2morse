<div class="relative h-full">
    <textarea
        class="absolute w-full resize-none rounded-md border border-gray-400 h-full text-[18px] pb-[40px] whitespace-pre-wrap"
        x-model="$wire.input"
        @keyup="$wire.validCharacter()"
    ></textarea>

    <div class="absolute bottom-0 w-full h-[40px] bg-white pr-[20px] rounded-b-md border border-gray-400 border-t-0 flex items-center">
        <div class="absolute end-0 pr-[12px]">{{$this->counted_length}}</div>
    </div>
</div>
