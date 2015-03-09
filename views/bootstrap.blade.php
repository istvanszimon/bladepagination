<nav>
    <ul class="pagination">
    @if ($previous)
        <li><a href="{{ $previous }}">{{ trans('pagination::pager.prev') }}</a></li>
    @else
        <li class="disabled"><span>{{ trans('pagination::pager.prev') }}</span></li>
    @endif
    @foreach ($links as $page => $url)
        @if ($page == $current)
            <li class="active"><span>{{ $page }}</span></li>
        @elseif($url)
            <li><a href="{{ $url }}">{{ $page }}</a></li>
        @else
            <li class="disabled"><span>{{ trans('pagination::pager.div') }}</span></li>
        @endif
    @endforeach
    @if ($next)
        <li><a href="{{ $next }}">{{ trans('pagination::pager.next') }}</a></li>
    @else
        <li class="disabled"><span>{{ trans('pagination::pager.next') }}</span></li>
    @endif
    </ul>
</nav>