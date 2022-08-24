loc;lastmod;priority;changefreq
@foreach($content as $item)
    {{ $item['loc'] }};{{ $item['lastmod'] }};{{ $item['priority'] }};{{ $item['changefreq'] }}
@endforeach
