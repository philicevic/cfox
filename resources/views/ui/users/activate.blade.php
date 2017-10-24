@extends('ui.index')

@section('content')
    <div class="row">

        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">Users</h3>

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
                            <th>User</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>User</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->verified)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-danger">Not Verified</span>
                                    @endif
                                </td>
                                <td><a id="{{ $user->id }}" class="user-activator btn btn-success"><i class="fa fa-check"></i></a></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <script type="text/javascript">
                    $('.user-activator').click(function() {
                        $(this).removeClass('btn-success').addClass('btn-warning').children('i').addClass('fa-spinner').addClass('fa-spin').removeClass('fa-check');
                        axios.post('/users/activate', {
                            userid: this.id
                        });
                        $(this).removeClass('btn-warning').addClass('disabled').addClass('btn-success').children('i').removeClass('fa-spinner').removeClass('fa-spin').addClass('fa-check');
                    });
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
        });
        </script>
    </div>
@endsection
