@extends('ui.index')

@section('content')
    <div class="row">

        <div class="col-xs-12">
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <div class="box box-primary">
                <div class="box-header">
                    <h3 class="box-title">
                        E-Mail:
                    </h3>
                </div>
                <div class="box-body">
                    <form class="inviteForm" action="{{ route('admin.users.sendInvite') }}" method="post">
                        {{ csrf_field() }}
                        <div class="input-group col-xs-8">
                            <input required type="email" class="form-control" name="email" placeholder="example@cfox.io">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-primary" name="button" value="Invite">Invite</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
