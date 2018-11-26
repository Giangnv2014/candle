@extends('adminlte::page')

@section('title', 'Approve users')

@section('content')
<div class="col-xs-12">
  <div class="box">
    <div class="box-header">
      <h3 class="box-title">Users List to Approve</h3>

      <div class="box-tools">
        <div class="input-group input-group-sm" style="width: 150px;">
          <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

          <div class="input-group-btn">
            <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
          </div>
        </div>
      </div>
    </div>
    <!-- /.box-header -->
    <div class="box-body table-responsive no-padding">
      <table class="table table-hover">
        <tbody><tr>
          <th>ID</th>
          <th>User name</th>
          <th>Email</th>
          <th>Registered at</th>
          <th></th>
        </tr>
        @forelse ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td><a href="{{ route('admin.users.approve', $user->id) }}"
                       class="btn btn-primary btn-sm">Approve</a></td>
            </tr>
        @empty
            <tr>
                <td colspan="4">No users found.</td>
            </tr>
        @endforelse
      </tbody></table>
    </div>
    <!-- /.box-body -->
  </div>
  <!-- /.box -->
</div>
@stop
