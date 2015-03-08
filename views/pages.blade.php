<nav>
  <ul class="pagination">
  @include('blade_pagination::link', ['button' => $previous])
  @foreach ($links as $button)
    @include('blade_pagination::link', compact('button'))
  @endforeach
  @include('blade_pagination::link', ['button' => $next])
  </ul>
</nav>