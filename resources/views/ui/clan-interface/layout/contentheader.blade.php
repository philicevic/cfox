<section class="content-header">
  <h1>
    {{ $page['title'] }}
    <small>{{ $page['info'] }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('clan.home', $clan->subdomain) }}"><i class="fa fa-dashboard"></i> cfox</a></li>
    {{ Breadcrumbs::render(Request::route()->getName(), $clan->subdomain) }}
  </ol>
</section>
