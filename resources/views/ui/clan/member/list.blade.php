@extends('ui.clan.index')

@section('content')

  <div class="row">

      <div class="col-xs-12">
        <div class="box box-warning">
          <div class="box-header">
            <h3 class="box-title">Member</h3>

            <div class="box-tools">
              <div class="input-group input-group-sm" style="width: 150px;">
                <input id="listsearch" type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                <div class="input-group-btn">
                  <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">

              <table id="userlist" class="table table-hover table-responsive">
                  <thead>
                      <tr>
                          <th>Nickname</th>
                          <th>E-Mail</th>
                          <th>Age</th>
                          <th>Team</th>
                          <th>Trial</th>
                          <th>Steam</th>
                          <th></th>
                      </tr>
                  </thead>
                  <tfoot>
                      <tr>
                        <th>Nickname</th>
                        <th>E-Mail</th>
                        <th>Age</th>
                        <th>Team</th>
                        <th>Trial</th>
                        <th>Steam</th>
                        <th></th>
                      </tr>
                  </tfoot>
                  <tbody>
                      @foreach ($memberlist as $member)
                          <tr id="{{ $member->id }}" data-href="{{ route('clan.member.show', [$clan->subdomain, $member->nickname]) }}">
                              <td>{{ $member->nickname }}</td>
                              <td>{{ $member->email }}</td>
                              <td>18</td>
                              <td></td>
                              <td>
                                @if($member->trial)
                                  @php ($trial_until = \Carbon\Carbon::parse($member->trial_until))
                                  <i class="fa fa-clock-o" data-toggle="tooltip" data-placement="top" title="Trial until {{ $trial_until->format('d.m.Y') }}"></i>
                                @endif
                              </td>
                              <td>
                                @if(isset($member->steamurl))
                                  <a href="{{$member->steamurl}}" target="_blank">
                                    <i class="fa fa-steam"></i>
                                  </a>
                                @endif
                              </td>
                              <td></td>
                          </tr>
                      @endforeach
                  </tbody>
              </table>

              <script type="text/javascript">

              </script>

          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>

      <script>
        $(document).ready(function() {
            var table = $('#userlist').DataTable({
                responsive: true,
                dom:    "<'row'<'col-sm-12'l>>" +
                        "<'row'<'col-sm-12'tr>>" +
                        "<'row'<'col-sm-5'i><'col-sm-7'p>>"
            });

            $('#listsearch').on( 'keyup', function () {
                table.search( this.value ).draw();
            });

            $(function () {
              $('[data-toggle="tooltip"]').tooltip()
            });

            jQuery(document).ready(function($) {
                $("tr").click(function() {
                    window.location = $(this).data("href");
                });
            });

        });
      </script>
  </div>

@endsection
