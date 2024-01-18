<div class="row">
    <div class="col-xs-12 col-sm-6 col-lg-6">
        <div class="alert alert-{{ $color }} fade in radius-bordered alert-shadowed" style="font-weight:600;">
            @if(isset($number))
                <span class="badge badge-{{ $color }} margin-right-5" style="font-weight:bold!important;">{{ $number }}</span> {{ $text }}
            @else
                {{ $text }}
            @endif
        </div>
    </div>
</div>
