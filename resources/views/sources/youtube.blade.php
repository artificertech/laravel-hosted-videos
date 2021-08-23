@props(['video', 'queryString' => null])

<iframe
    {{ $attributes->merge([
    'width' => '100%',
    'height' => '100%',
    'frameborder' => '0',
    'webkitallowfullscreen',
    'mozallowfullscreen',
    'allowfullscreen',
]) }}
    src="https://www.youtube.com/embed/{{ $video->video_id }}{{ $queryString ? '?' . $queryString : '' }}"></iframe>
