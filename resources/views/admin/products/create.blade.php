<form class="form-horizontal" action="{{ url('/admin/product/store') }}" method="POST">
    	
	{{ csrf_field() }}

  <div class="form-group">
    <label for="input1" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input1"
      		name="name" value="{{ old('name') }}" data-action="update_slug" data-update="product_slug"
             required/>
    </div>
  </div>
  <div class="form-group">
    <label for="input2" class="col-sm-2 control-label">Slug</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input2" 
      		name="slug" value="{{ old('slug') }}" data-type="product_slug" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="input3" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input3" 
      		name="description" value="{{ old('description') }}" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="input4" class="col-sm-2 control-label">Quantity</label>
    <div class="col-sm-5">
      <input type="number" class="form-control" id="input4" 
      		name="quantity" value="{{ old('quantity') }}"  required/>
    </div>
    <div class="col-sm-5">
      <input type="text" class="form-control" id="input41" 
      		name="unit" value="{{ old('unit') }}" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="input5" class="col-sm-2 control-label">Price</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="input5" 
      		name="price" value="{{ old('price') }}" required/>
    </div>
    <div class="col-sm-1">
    	Rs
    </div>
  </div>

   <div class="form-group">
    <label for="input3" class="col-sm-2 control-label">Discount</label>
    <div class="col-sm-9">
      <input type="number" class="form-control" id="input3" 
      		name="discount" value="{{ old('discount') }}" required/>
    </div>
    <div class="col-sm-1">
    	%
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Create new product</button>
    </div>
  </div>
</form>