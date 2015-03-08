@if ($button->link())
    <li>
        <a href="{{ $button->url() }}">{{ $button->text() }}</a>
    </li>
@elseif($button->active())
    <li class="active">
        <span>{{ $button->text() }}</span>
    </li>
@else
    <li class="disabled">
        <span>{{ $button->text() }}</span>
    </li>
@endif