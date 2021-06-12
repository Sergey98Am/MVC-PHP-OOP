<div class="edit-product">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3>Edit Product</h3>
                <form action="<?php echo url('product/update/' . $product['id']) ?>" method="post">
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title"
                               value="<?php echo $product['title'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="text" class="form-control" id="price" name="price"
                               value="<?php echo $product['price'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="quantity">Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity"
                               value="<?php echo $product['quantity'] ?>">
                    </div>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .edit-product {
        padding: 50px 0;
    }

    h3 {
        margin-bottom: 20px;
        color: white;
    }

    form {
        padding: 20px;
        border: 3px solid white;
        border-radius: 20px;
        background: #9bdb9b;
    }
</style>