<section class="content-header">
  <h1>
    {{ $page['title'] }}
    <small>{{ $page['info'] }}</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ route('home') }}"><i class="fa fa-dashboard"></i> cfox</a></li>
    {{ Breadcrumbs::render(Request::route()->getName()) }}
  </ol>
</section>
