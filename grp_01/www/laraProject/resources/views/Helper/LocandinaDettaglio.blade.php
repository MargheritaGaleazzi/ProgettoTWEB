@php
        if (empty($imgFile)) {
            $imgFile = 'default.jpg';
        }
        if (null !== $attrs) {
            $attrs = 'class="' . $attrs . '"';
        }

@endphp
<img src="{{ asset('images/locandine/' . $imgFile) }}" {!! $attrs !!} width="320" height="320" object-fit="cover">