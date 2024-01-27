<div class="h-full">
    <textarea
        class="w-full rounded-md resize-none border border-gray-400 h-full"
        x-model="$wire.input"
        @keyup="$wire.validCharacter()"
    ></textarea>
</div>
