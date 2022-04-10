<main class="dashboard">

    <p>
        <a href="/cities/create" type="button" class="btn btn-sm btn-success">Add City</a>
    </p>
    <form action="" method="get">
        <div class="input-group mb-3">
            <input type="text" name="search" class="form-control" placeholder="Search" value="<?php echo $keyword ?>">
            <div class="input-group-append">
                <button class="btn btn-success" type="submit">Search</button>
            </div>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>

                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>


            <?php

            foreach ($products as $i => $product) {
            ?>
            <?php if ($product['is_active']) : ?>

            <tr>
                <th scope="row"><?php echo (int)$i + 1 ?></th>

                <td><?php echo $product['name'] ?></td>


                <td>
                    <a href="/cities/update?id=<?php echo $product['id'] ?>"
                        class="btn btn-sm btn-outline-primary">Edit</a>
                    <form method="post" action="/cities/delete" style="display: inline-block">
                        <input type="hidden" name="id" value="<?php echo $product['id'] ?>" />
                        <button type="submit" class="btn btn-sm btn-outline-danger">Delete</button>
                    </form>
                </td>
            </tr>

            <?php endif; ?>

            <?php } ?>
        </tbody>
    </table>

</main>