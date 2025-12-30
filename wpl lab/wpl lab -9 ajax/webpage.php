<?php
$conn = mysqli_connect('localhost', 'root', '', 'products');
include 'main.html';
?>
<html>

<head>
    <title>T&F</title>
</head>

<body>
    <div class="container mt-3">
        <div class="row col-12 g-3">
            <div class="col col-md-6">
                <h3 class="text-center">Form</h3>
                <form id="form">
                    <div class="input-group mt-4 mb-4">
                        <label>product name</label>
                        <input name="p_name" id="p_name" type="text" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <label>product category</label>
                        <input name="p_category" id="p_category" type="text" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <label>product type</label>
                        <input name="p_type" id="p_type" type="number" class="form-control">
                    </div>
                    <div class="input-group mb-4">
                        <label>product price</label >
                  <input name="p_price" id="p_price" type="number" class="form-control">
                    </div>
                    <button class="btn btn-primary w-100 " id="btn" type="submit">Submit</button>
                </form>
            </div>
            <div class="col col-md-6">
                <h3 class="text-center">Table</h3>
                <div class="table-responsive">
                    <table class="table table-light text-center">
                        <thead>
                            <tr>
                                <td>S.no</td>
                                <td>product name</td>
                                <td>product category</td>
                                <td>product type</td>
                                <td>product Price</td>
                                <td>Actions</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $fetch_query = "SELECT * FROM producs";
                            $result = mysqli_query($conn, $fetch_query);
                            $row = mysqli_num_rows($result);

                            for ($i = 0; $i < $row; $i++) {
                                $data = mysqli_fetch_assoc($result);
                            ?>
                                <tr>
                                    <td><?php echo $i + 1 ?></td>
                                    <td><?php echo $data['p_name']; ?></td>
                                    <td><?php echo $data['p_category']; ?></td>
                                    <td><?php echo $data['p_type']; ?></td>
                                    <td><?php echo $data['p_price']; ?></td>
                                    <td>
                                        <div class="d-flex gap-2 justify-content-center">
                                            <a href="edit.php?p_id=<?php echo $data['p_id']; ?>"><button class="btn btn-text-muted btn-sm">Edit</button></a>
                                            <a href="delete.php?p_id=<?php echo $data['p_id']; ?>"><button onclick="return confirm('you want to delete this item?')" class="btn btn-secondary btn-sm">Delete</button></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $('#form').on('submit', function(e) {
                e.preventDefault()

                let jsonFile = {
                    'p_name': $('#p_name').val(),
                    'p_category': $('#p_category').val(),
                    'p_type': $('#p_type').val(),
                    'p_price': $('#p_price').val(),
                }
                console.log(jsonFile)

                $.ajax({
                    type: 'POST',
                    url: 'create.php',
                    data: jsonFile,
                    success: function(response) {
                        location.reload()
                        console.log(response)
                    },
                    error: function(error) {
                        console.log(error)
                    }
                })
            })
        })
    </script>
</body>

</html>