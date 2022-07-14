@props(['ancho'=>'h-4'])
<div class="flex items-center mx-2">
    <div class="w-full bg-gray-200 {{ $ancho }} rounded-full border overflow-hidden">
        <div {{ $attributes->merge(['class'=> $ancho.' text-center text-sm text-white font-bold leading-none']) }} x-bind:style="{width:progress+'%'}">@if($ancho == 'h-4')<span x-text="progress+' %'"></span>@endif</div>
    </div>
</div>