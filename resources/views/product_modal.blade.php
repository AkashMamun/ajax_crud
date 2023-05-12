<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <form action="" method="POST" id="addProductForm">
    @csrf
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="productModalLabel">Add Product</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="errMsgContainer">

            </div>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name">
            </div>
            <div class="form-group mt-2">
                <label for="price">Price</label>
                <input type="number" class="form-control" name="price" id="price" placeholder="Enter your price">
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary add_product">Add Product</button>
          </div>
        </div>
      </div>
  </form>
</div>