<h1>Product List</h1>

<p><a href="/products/create" class="btn btn-success">Create Product</a></p>

<form>
    <div class="input-group mb-3">
        <input type="text" name="search" class="form-control" placeholder="Search your product here ..." value="<?php echo $search ?>">
        <button class="btn btn-outline-secondary" type="submit" id="search">Search</button>
    </div>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">image</th>
            <th scope="col">title</th>
            <th scope="col">price</th>
            <th scope="col">created_at</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($products as $product) { ?>
            <tr>
                <th scope="row">1</th>
                <td><?php echo $product["image"] ?></td>
                <td><?php echo $product["title"] ?></td>
                <td><?php echo $product["price"] ?></td>
                <td><?php echo $product["created_at"] ?></td>
                <td>
                    <a href="/products/update" class="btn btn-outline-primary">Edit</a>
                    <a href="/products/delete" class="btn btn-outline-danger">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>