<div class="col-xs-12 col-sm-3 col-lg-3">
    <div class="databox databox-lg radius-bordered databox-shadowed no-margin">
        <div class="databox-left bg-white">
            <i class="{{ $icon }} {{ $color }}" aria-hidden="true"></i>
        </div>
        <div class="databox-right bordered-thick bordered-{{ $color }} bg-white">
            <span class="databox-number {{ $color }}">{{ $content }}</span>
            <div class="databox-text darkgray">
                {{ $title }}
            </div>
        </div>
    </div>
</div>
