<form class="form-horizontal" action="{{ url('/admin/offer/update') }}" method="POST">
    	
	{{ csrf_field() }}

	<input type="hidden" name="id" value="{{ $offer->id }}">
  <div class="form-group">
    <label for="input1" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input1" placeholder="Free gift"
      		name="name" value="{{ old('name', $offer->name) }}" required />
    </div>
  </div>
  <div class="form-group">
    <label for="input2" class="col-sm-2 control-label">Slug</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input2" placeholder="free-gift"
      		name="slug" value="{{ old('slug', $offer->slug) }}" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="input3" class="col-sm-2 control-label">Description</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input3" placeholder="Description"
      		name="description" value="{{ old('description', $offer->description) }}" />
    </div>
  </div>
  <div class="form-group">
    <label for="input4" class="col-sm-2 control-label">Valid until</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="input4" placeholder="2019-10-10"
      		name="valid_until" value="{{ old('valid_until', $offer->valid_until) }}" required/>
    </div>
  </div>
  <div class="form-group">
    <label for="input5" class="col-sm-2 control-label">Link to the offer</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="input5" placeholder="http://"
      		name="url" value="{{ old('url', $offer->url) }}" />
    </div>
  </div>
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Update</button>
    </div>
  </div>
</form>