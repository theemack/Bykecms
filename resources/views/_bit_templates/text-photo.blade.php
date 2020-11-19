<div class="row"> 
    <div class="col-md-12"><h2>{{ $bit->name }}</h2></div>
    <div class="col-md-8">
       
        <div style="text-align:justify">
            <div class="bit-text bit-text-left">
                {!! $bit->text !!}
            </div>
        </div>
        @include('_bit_templates.partials.button')

    </div>
    @if (!empty($bit->photo))
        <div class="col-md-4">
            <img src="{{ url('/nuotraukos/'.$bit->photo->id.'/'.$bit->photo->filename) }}" style="width:100%;">
        </div>
    @endif
</div>

