<div class="products">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="<?php echo url('product/create') ?>" class="btn btn-primary"><b>Create Product</b></a>
            </div>
            <?php foreach ($products as $product) : ?>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="card text-center">
                    <div class="card-header">
                        <h4><?php echo $product['title'] ?></h4>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><b>Price: </b> <?php echo $product['price'] ?></h5>
                        <h5 class="card-title"><b>Quantity: </b> <?php echo $product['quantity'] ?></h5>
                        <div class="actions">
                            <a href="<?php echo url('product/edit/' . $product['id']) ?>" class="btn btn-info">Edit</a>
                            <form action="<?php echo url('product/delete/' . $product['id']) ?>" method="post">
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<style>
    .products {
        padding: 50px 0;
    }

    h2 {
        margin-bottom: 20px;
        color: white;
    }

    .card {
        margin: 10px 0;
    }

    .card-body {
        background: #9bdb9b;
    }

    .card-header h4 {
        color: green;
    }

    form {
        display: inline-block;
    }
</style>

