@extends('adminlte::page')

@section('title', 'Product detail')

@section('content')
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
      <h3 class="box-title">Product detail</h3>
    </div>
    <!-- /.box-header -->

    <div class="form-horizontal">
      <div class="box-body">
        <div class="form-group">
          <label for="name" class="col-sm-2 control-label">Name</label>

          <div class="col-sm-8">
            {{ $product->name }}
          </div>
        </div>
        <div class="form-group">
          <label for="code" class="col-sm-2 control-label">Code</label>

          <div class="col-sm-3">
            {{ $product->code }}
          </div>
        </div>
        <div class="form-group">
          <label for="price" class="col-sm-2 control-label">Price</label>

          <div class="col-sm-3">
            {{ $product->price }}
          </div>
        </div>
        <div class="form-group">
          <label for="descritpion" class="col-sm-2 control-label">Description</label>

          <div class="col-sm-8">
            {{ $product->description }}
          </div>
        </div>
        <!-- <div class="form-group">
          <label for="image1" class="col-sm-2 control-label">Choose image</label>

          <div class="col-sm-8">
            {{ $product->image1 }}
          </div>
        </div> -->
      </div>
      <!-- /.box-body -->
      <div class="box-footer">
        <a href="{{ route('admin.products.edit', ['product' => $product]) }}" class="btn btn-info pull-right">Edit</a>
      </div>
      <!-- /.box-footer -->
    </div>
  </div>
</div>
@stop



