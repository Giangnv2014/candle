@extends('adminlte::page')

@section('title', 'Create New Product')

@section('content')
<div class="col-xs-12">
  <div class="box box-info">
    <div class="box-header with-border">
      <h3 class="box-title">Update Product</h3>
    </div>
    <!-- /.box-header -->
    <!-- form start -->
    <form class="form-horizontal" method="POST" action="{{ route('admin.products.update', ['product' => $product]) }}">
      @csrf
      @method('PUT')

      @include('products._form_create_edit')

      <!-- /.box-body -->
      <div class="box-footer">
        <button type="submit" class="btn btn-primary pull-right">Update</button>
      </div>
      <!-- /.box-footer -->
    </form>
  </div>
</div>
@stop



