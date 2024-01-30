<template
    x-teleport="body"
    x-data="{ open: false }"
>
    <div
        x-show="open"
        x-on:flms-{{ $flashEvent }}.window="
                    open = true;
                    setTimeout(() => open = false, 3000);"
        class="absolute bottom-[20px] left-[12px] pl-4 pr-12 py-3"
        style="background-color: {{$bgColor}}"
    >
        {{ $message }}
    </div>
</template>
