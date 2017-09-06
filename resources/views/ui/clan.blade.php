Diese Subdomain gehört {{ $clan->name }}.


@if (Auth::check())
  <h3>Logged in as {{ Auth::user()->name }}</h3>
@endif

<h4>Admins of {{ $clan->name }}:</h4>
<ul>
  @foreach ($user as $single_user)
    <li>
      <a href="mailto:{{ $single_user->email }}">
        {{ $single_user->name }}
      </a>
    </li>
  @endforeach
</ul>

<h4>Member of {{ $clan->name }}:</h4>
<ul>
  @foreach ($members as $member)
    <li>{{ $member->firstname . " '" . $member->nickname ."'" }}</li>
  @endforeach
</ul>
