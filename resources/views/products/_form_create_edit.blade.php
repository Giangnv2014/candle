<div class="box-body">
  <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>

    <div class="col-sm-8">
      <input type="text" class="form-control" id="name" name="name" value="{{ isset($product) ? $product->name : '' }}" placeholder="Name limit 100 character">
    </div>
  </div>
  <div class="form-group">
    <label for="code" class="col-sm-2 control-label">Code</label>

    <div class="col-sm-3">
      <input type="text" class="form-control" id="code" name="code" value="{{ isset($product) ? $product->code : '' }}" placeholder="Code limit 30 character">
    </div>
  </div>
  <div class="form-group">
    <label for="price" class="col-sm-2 control-label">Price</label>

    <div class="col-sm-3">
      <input type="text" class="form-control" id="price" name="price" value="{{ isset($product) ? $product->price : '' }}" placeholder="500000">
    </div>
  </div>
  <div class="form-group">
    <label for="description" class="col-sm-2 control-label">Description</label>

    <div class="col-sm-8">
      <textarea class="form-control" id="description" name="description" value="{{ isset($product) ? $product->description : '' }}" placeholder="Enter ..."></textarea>
    </div>
  </div>
  <!-- <div class="form-group">
    <label for="image1" class="col-sm-2 control-label">Choose image</label>

    <div class="col-sm-8">
      <input class="form-control" type="file" id="image1" name="image1">
      <p class="help-block">Image type avariable: jpg, jpeg, png.</p>
    </div>
  </div> -->
</div>
