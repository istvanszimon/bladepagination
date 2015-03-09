<ul class="pagination">
    @if ($previous)
        <li class="arrow"><a href="{{ $previous }}">{{ trans('pagination::pager.prev') }}</a></li>
    @else
        <li class="arrow unavailable"><a href="#!">{{ trans('pagination::pager.prev') }}</a></li>
    @endif
    @foreach ($links as $page => $url)
        @if ($page == $current)
            <li class="current"><a href="#!">{{ $page }}</a></li>
        @elseif($url)
            <li><a href="{{ $url }}">{{ $page }}</a></li>
        @else
            <li class="unavailable"><a href="#!">{{ trans('pagination::pager.div') }}</a></li>
        @endif
    @endforeach
    @if ($next)
        <li class="arrow"><a href="{{ $next }}">{{ trans('pagination::pager.next') }}</a></li>
    @else
        <li class="arrow unavailable"><span>{{ trans('pagination::pager.next') }}</span></li>
    @endif
</ul>