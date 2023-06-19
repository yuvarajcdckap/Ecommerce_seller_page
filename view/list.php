<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List Page</title>
    <style>
        table, th, td {
            border: 1px solid;
        }
        th{
            background-color: #61cdf1;
        }
        table {
            width: 75%;
            text-align: center;
            border-collapse: collapse;
        }
        .t-head{
            font-size: 18px;
            color: black;
            background-color: #61cdf1;
            border:black;
        }
        .low{
            background-color: #d94308;
        }
        a{
            color: white;
            text-decoration: none;
            font-size:14px;
        }
        a:hover{
            text-decoration: underline;
        }   
        .homeBtn{
            height:25px;
            border:none;
            margin-top:5px;
            margin-left:53rem;
            border-radius:5px;
            background-color: #0479ff;
        }
        .imgDiv{
            height:75px;
            width:75px;
        }
        .pro_img{
            height:100%;
            width:100%;
        }
        .edit{
            background-color:orange;
            height:30px;
            width:80px;
            border:none;
            border-radius:5px;
        }
        .delete{
            height:30px;
            width:80px;
            border:none;
            background-color:red;
            border-radius:5px;
        }
        table button:hover{
            box-shadow: rgba(0, 0, 0, 0.19) 0px 10px 20px, rgba(0, 0, 0, 0.23) 0px 6px 6px;
        }
        td{
            background-color: #eaf5f8;
        }
    </style>
</head>

<body>
    <div class='container'>
    <table>
        <tr>
            <th colspan='9' class='t-head'>Product Details</th>
        </tr>
        <tr>
            <th>id</th>
            <th>Product Name</th>
            <th>Product Image</th>
            <th>SKU</th>
            <th>Price</th>
            <th>Brand</th>
            <th>No.Of.Stock</th>
            <th>Edit</th>
            <th>Delete</th>    
        </tr>
        <?php foreach($products as $key => $product):?>
            <?php if($product->available_stocks<10){?>
        <tr class='low'>
            <td><?php echo $key+1?></td>
            <td><?php echo $product->product_name?></td>
            <td class='imgDiv'><img class='pro_img' src="<?php echo $product->product_image?>" alt=""> </td> 
            <td><?php echo $product->SKU?></td> 
            <td><?php echo $product->price?></td>
            <td><?php echo $product->brand?></td>
            <td><?php echo $product->available_stocks?></td>
            <td>
                <form method="post" action="/edit">
                <button type="submit" value="<?=$product->id;?>" name="edit">Edit</button>
                </form>
            </td>
            <td>
                <form method="post" action="/delete">
                <button type="submit" value="<?=$product->id;?>" name="delete" class="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php }else{?>
        <tr>
            <td><?php echo $key+1?></td>
            <td><?php echo $product->product_name?></td>
            <td class='imgDiv'><img src="<?php echo $product->product_image?>" alt="" class='pro_img'></td>
            <td><?php echo $product->SKU?></td> 
            <td><?php echo $product->price?></td>
            <td><?php echo $product->brand?></td>
            <td><?php echo $product->available_stocks?></td>
            <td>
                <form method="post" action="/edit">
                <button type="submit" value="<?=$product->id;?>" name="edit" class='edit'>Edit</button>
                </form>
            </td>
            <td>
                <form method="post" action="/delete">
                <button type="submit" value="<?=$product->id;?>" name="delete" class="delete">Delete</button>
                </form>
            </td>
        </tr>
        <?php }?>
        <?php endforeach;?>
    </table>
    <button class='homeBtn'><a href="/">⬅GO TO HOME PAGE</a></button>
</div>
</body>
</html>
