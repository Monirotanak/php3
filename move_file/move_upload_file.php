<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>
<body>
    <div class="container w-50 mt-3 p-5 shadow rounded-3">
        <form action="">
            <image id="image" src="https://i.pinimg.com/736x/3d/bb/d4/3dbbd43848d2376220f70c88489d6fd6.jpg" width="200px" height="200px" class="rounded-circle" alt="">
            <input id="file" type="file" class="form-control">
        </form>
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
            const file = this.files[0];
            if(file){
                const image=URL.createObjectURL(file)
                $('#image').attr('src', image)
            }
        })
    })
</script>