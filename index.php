<?php
include ("includes/header.php");

$link = mysqli_connect("localhost", "root", "", "shop_db");
if (mysqli_connect_errno())
    exit("خطا با شرح زیر رخ داده است" . mysqli_connect_error());


$query = "SELECT * FROM products";
$result = mysqli_query($link, $query);
?>

<table>
    <tr style="display: flex;">
        <?php
        $counter = 0;
        while ($row = mysqli_fetch_array($result)) {
            $counter++;
            ?>

            <td style="border-style: dotted dashed; vertical-align: top; overflow: hidden;">
                <a style="text-decoration: none; display: block; overflow-wrap: break-word;"
                    href="product_detail.php?id=<?php echo ($row['pro_code']); ?>">
                    <h4 style="color: brown; margin: 0px; padding: 15px 0px;"><?php echo ($row['pro_name']); ?></h4>
                    <img width="250px" height="150px" src="images/products/<?php echo ($row['pro_image']) ?>" />
                    <br />
                    قیمت : <?php echo ($row['pro_price']); ?>&nbsp; ریال
                    <br />
                    تعداد موجودی : <span style="color: red;"><?php echo ($row['pro_qty']); ?></span>
                    <br />
                    توضیحات : <span style="color: green;"><?php echo (substr($row['pro_detail'], 0, 120)); ?>...</span>
                    <br />
                    <b>
                        <a href="product_detail.php?id=<?php echo ($row['pro_code']); ?>" style="text-decoration: none;">
                            خرید
                        </a>
                    </b>
                </a>

            </td>

            <?php
            if ($counter % 3 == 0)
                echo ('</tr><tr>');
        }
        if ($counter % 3 != 0)
            echo ('</tr>')
                ?>
    </table>


    <?php
        include ("includes/footer.php");
        ?>