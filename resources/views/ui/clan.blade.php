Diese Subdomain gehört {{ $clan->name }}.

<ul>
  @foreach ($members as $member)
    <li>{{ $member->firstname . " '" . $member->nickname ."'" }}</li>
  @endforeach
</ul>

@if (Auth::check())
  <h3>Logged in!</h3>
@endif
