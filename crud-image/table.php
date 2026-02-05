<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body>
    <div class="container mt-4 p-4 shadow rounded-3">
        <!-- Button trigger modal -->
        <button id="add" type="button" class="btn btn-outline-dark float-end mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            +Add Product
        </button>
        <table class="table table-hover text-center">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Product Name</th>
                    <th>QTY</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Discount</th>
                    <th>Payment</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    require 'connection.php';
                    $select="SELECT * FROM tbl_product";
                    $rs=$conn->query($select);
                    while($row=mysqli_fetch_assoc($rs)){
                        echo '
                        <tr>
                            <td>'.$row['id'].'</td>
                            <td>'.$row['pro_name'].'</td>
                            <td>'.$row['qty'].'</td>
                            <td>$'.$row['price'].'</td>
                            <td>$'.$row['total'].'</td>
                            <td>'.$row['discount'].'%</td>
                            <td>$'.$row['payment'].'</td>
                            <td>
                                <img id="imgg" src="image/'.$row['image'].'" width="40px"
                                    height="40px" class="rounded-circle" alt="">
                            </td>
                            <td>
                                <a href="delete.php?id='.$row['id'].'" class="btn btn-outline-danger" onclick="return confirm(\'Are you sure?\')">Delete</a>
                                <button id="edit" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-warning">Edit</button>
                            </td>
                        </tr>
                        
                        ';
                    }
                 ?>
            </tbody>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="form" action="insert.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="id" id="id"  >
                                <div class="mb-2">
                                    <label for="product" class="form-label">Product Name</label>
                                    <input id="product" name="pro_name" type="text" class="form-control" placeholder="Product...">
                                </div>
                                <div class="mb-2">
                                    <label for="qty" class="form-label">QTY</label>
                                    <input id="qty" name="qty" type="number" class="form-control" placeholder="QTY...">
                                </div>
                                <div class="mb-2">
                                    <label for="price" class="form-label">Price</label>
                                    <input id="price" name="price" step="0.01" type="number" class="form-control" placeholder="Price...">
                                </div>
                                <div class="mb-2">
                                    <label for="file" class="form-label">Image</label> <br>
                                    <img id="image" src="https://i.pinimg.com/736x/4c/3e/02/4c3e027d03ea726d4696eb368852a174.jpg" width="100px" height="100px" class="rounded-circle" alt="">
                                    <input id="file" name="file" type="file" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" id="save" name="submit" class="btn btn-primary">Save</button>
                                <button type="submit" id="update" name="update" class="btn btn-warning">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </table>
    </div>
</body>
</html>
<script>
    $(document).ready(function(){
        $('#file').hide()
        $('#image').click(function(){
            $('#file').click()
        })
        $('#file').change(function(){
            let file=this.files[0]
            if(file){
                let image=URL.createObjectURL(file)
                $('#image').attr('src',image)
            }            
        })
        $('#add').click(function(){
            $('#save').show()
            $('#update').hide()
            $('#exampleModalLabel').text('Add Product')
            $('#form').attr('action','insert.php')
            $('#form').trigger('reset')
        })
        $(document).on('click','#edit',function(){
            $('#save').hide()
            $('#update').show()
            $('#exampleModalLabel').text('Edit Product')
            $('#form').attr('action','update.php')
            const row=$(this).closest('tr');
            const id=row.find('td:eq(0)').text().trim()
            const pro_name=row.find('td:eq(1)').text().trim()
            const qty=row.find('td:eq(2)').text().trim()
            const price=row.find('td:eq(3)').text().trim().slice(1)
            
            const image=row.find('img').attr('src')
            console.log(image);
            
            $('#id').val(id)
            $('#product').val(pro_name)
            $('#qty').val(qty)
            $('#price').val(price)
            $('#image').attr('src',image)
        })
    })
</script> 