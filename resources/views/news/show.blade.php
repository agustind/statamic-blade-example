@inject('modify', 'Statamic\Modifiers\Modify')
@extends('layout')

@section('body')

    <div class="pb-16 max-w-screen-xl mx-auto">
        <h3 class="text-3xl mb-8 text-gray-600">{{ $title }}</h3>
        <div class="mb-12">
            
            @if($image->value())
                @if(!empty($image))
                    @glide($image, ['width' => '1000', 'height' => 600])
                        <div class="rounded-xl" style="height: 600px; background-image: url({{ $url }})"></div>
                    @endglide
                @endif
            @endif
            
        </div>
        <div>
            Word count: {{ $word_count }}<br>
            Read time: {{ $read_time }}
            {!! $content !!}
        </div>
    </div>



@endsection