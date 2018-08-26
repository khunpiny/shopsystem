@include('admins/header')
        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Product</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">home</a></li>
                            <li class="active">From Product</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    <div class="container">
  <form action="{{url('products')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="form-group">
    <label>Product name</label>
    <input type="text" class="form-control" name="name">
  </div>
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="price">
  </div>
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control" name="description">
  </div>
  <div class="form-group">
    <label>Category</label>
    <select class="form-control" id="inlineFormCustomSelectPref" name="category">
    <option selected>Choose...</option>
    <option value="1">Acne</option>
    <option value="2">Maintain</option>
  </select>
  </div>
  <div class="form-group">
    <label>Image</label>
    <input type="file" class="form-control" name="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>






    <script src="{{ asset('js/vendor/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

</body>
</html>
