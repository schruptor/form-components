<div {{ $attributes->merge(['class' => '']) }}>
  <span class="flex">
    <div class="bg-slate-600 p-2 text-white">
      {{ $icon }}
    </div>
    <input type="{{ $type }}"
           id="{{ $id }}"
           class="w-full border border-slate-400" />
    <input type="hidden"
           id="{{ $idHidden }}"
           data-id=""
           data-workstation-id=""
           data-item-group-id=""
           data-gv-typ=""
           data-customergroups=""
           data-short-description=""
           data-title=""
           data-price=""
           data-taxid=""
           data-taxrate=""
           data-taxid-oh=""
           data-taxrate-oh=""
           data-additional-items=""
           data-kombi-items=""
           data-use-access-control=""
           data-direct-printing=""
           data-use-side-dishes=""
           data-quota="" />
  </span>
</div>
