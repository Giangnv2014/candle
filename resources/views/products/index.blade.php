@extends('adminlte::page')

@section('title', 'List product')

@section('content')
<div class="row">
  <div class="col-xs-12">
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @elseif (session('error'))
      <div class="alert alert-error">
        {{ session('error') }}
      </div>
    @endif
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">List product</h3>

        <div class="box-tools">
          <!-- <div class="input-group input-group-sm" style="width: 250px; float: left;">
            <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

            <div class="input-group-btn">
              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </div>
          </div> -->
          <div style="float: left; padding-left: 5px;">
            <a class="btn btn-primary btn-sm" href="{{ route('admin.products.create') }}">Create</a>
          </div>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tbody>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Code</th>
              <th>Price</th>
              <th>Description</th>
              <th class="col-md-2 text-center">Action</th>
            </tr>

            @foreach ($products as $product)
            <tr>
              <td>{{ $product->id }}</td>
              <td>{{ $product->name }}</td>
              <td>{{ $product->code }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->description }}</td>
              <td class="text-center">
                <a href="{{ route('admin.products.edit', ['product' => $product]) }}" class="btn btn-xs btn-primary">Edit</a>
                <form action="{{ route('admin.products.destroy', ['product' => $product]) }}" method="POST" style="display: inline;">
                  {{ method_field('DELETE') }}
                  {!! csrf_field() !!}
                  <button type="submit" class="btn btn-xs btn-danger"/>Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <!-- /.box-body -->
      <!-- <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
          <li><a href="#">«</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><a href="#">3</a></li>
          <li><a href="#">»</a></li>
        </ul>
      </div> -->
    </div>
    <!-- /.box -->
  </div>
</div>
@stop
