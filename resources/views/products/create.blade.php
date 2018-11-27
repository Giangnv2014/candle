@extends('adminlte::page')

@section('title', 'Create New Product')

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title">Create New Product</h3>
      </div>
      <!-- /.box-header -->
      <!-- form start -->
      <form class="form-horizontal" method="POST" action="{{ route('admin.products.store') }}">
        {!! csrf_field() !!}

        @include('products._form_create_edit')

        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-info pull-right">Create</button>
        </div>
        <!-- /.box-footer -->
      </form>
    </div>
  </div>
</div>
@stop
