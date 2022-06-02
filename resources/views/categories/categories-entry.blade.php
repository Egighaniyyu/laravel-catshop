<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Categories Entry</title>
    <link rel="stylesheet" href="../css/admin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="../admin.php">Home</a>
            <a href="categories.php">Categories</a>
            <a href="../transaction/transaction.php">Transaction</a>
        </div>

        <div class="right_content">
            <div class="navbar">
                <img src="../assets/logo.png" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Input Categories</h3>
                <div class="form-login">
                    <form action="categories-proses.php" method="post" enctype="multipart/form-data">
                        <label for="categories">Categories</label>
                        <input class="input" type="text" name="categories" id="categories" placeholder="Categories" />

                        <label for="categories">Price</label>
                        <input class="input" type="text" name="price" id="price" placeholder="Price" />

                        <label for="photo">Photo</label>
                        <input type="file" name="photo" id="photo" style="margin-bottom: 20px" />

                        <button type="submit" class="btn btn-simpan" name="simpan">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>