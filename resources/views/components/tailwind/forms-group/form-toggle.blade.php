<div class="mt-4">
    <label class="relative inline-flex cursor-pointer items-center">
        <input type="checkbox" value="" class="peer sr-only" />
        <div class="peer h-6 w-11 rounded-full bg-gray-400 after:absolute after:start-[2px] after:top-[2px] after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-600 peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:outline-none rtl:peer-checked:after:-translate-x-full"></div>
    </label>

    @if($hasErrorAndShow($name))
        <x-form-errors :name="$name" />
    @endif
</div>
