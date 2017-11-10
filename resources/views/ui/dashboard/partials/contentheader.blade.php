<section class="content-header">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-warning alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-warning"></i> Warning!</h4>
                This software is still in pre-alpha status. It is just for testing purposes.
                Your data could get deleted at any time, so keep in mind to still hold on to your former management software until cfox reaches the stable version.
            </div>
        </div>
    </div>
</section>

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
