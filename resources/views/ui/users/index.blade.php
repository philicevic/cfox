@extends('ui.index')

@section('content')
    <div class="row">

        <div class="col-xs-12">
          <div class="box box-warning">
            <div class="box-header">
              <h3 class="box-title">All Users</h3>

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
                            <th>ID</th>
                            <th>User</th>
                            <th>E-Mail</th>
                            <th>Status</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>ID</th>
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
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    @if ($user->verified)
                                        <span class="label label-success">Active</span>
                                    @else
                                        <span class="label label-danger">Not Verified</span>
                                    @endif
                                </td>
                                <td><a href="{{ route('admin.users.edit', $user->id) }}"><i class="fa fa-edit"></i></a></td>
                                <td></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

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
                        "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                // columnDefs: [
                //     {
                //         targets: 5,
                //         visible: true,
                //         searchable: false
                //     }
                // ]
            });

            $('#listsearch').on( 'keyup', function () {
                table.search( this.value ).draw();
            } );
        });
        </script>
    </div>
@endsection
