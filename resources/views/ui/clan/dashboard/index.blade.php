@extends('ui.clan.index')

@section('content')
  The creator of this clan is {{ $clan->admin->name }}.
@endsection
