<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blacktie</title>
    <link rel="stylesheet" href="style.css" />
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
    <style>
        .product-container {
            display: flex;
            max-width: 100%;
            padding: 40px;
            gap: 40px;
            background-color: #fff;
            box-sizing: border-box;
        }

        .product-image img {
            width: 100%;
            max-width: 400px;
            height: auto;
        }

        .product-details {
            flex: 1;
        }


        .product-title {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .product-id {
            color: #888;
            font-size: 14px;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 24px;
            font-weight: bold;
            color: #000;
            margin-bottom: 20px;
        }

        .label {
            font-weight: bold;
            margin-top: 15px;
            display: block;
        }

        select,
        .quantity {
            margin-top: 5px;
            margin-bottom: 15px;
        }

        .quantity {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .quantity button {
            width: 30px;
            height: 30px;
        }

        .actions {
            display: flex;
            gap: 10px;
        }

        .add-to-cart {
            background-color: black;
            color: white;
            padding: 10px 30px;
            border: none;
            cursor: pointer;
        }

        .wishlist {
            font-size: 24px;
            cursor: pointer;
            border: 1px solid #ccc;
            padding: 5px 10px;
        }

        .product-info {
            font-size: 14px;
            color: #333;
            margin-top: 20px;
        }

        .product-info p {
            margin: 4px 0;
        }
    </style>
</head>

<body>
    <?php include 'component/navbar.php'; ?>


    <div class="product-container">
        <div class="product-image">
            <img src="./assets/MaroonSuit.png" alt="Maroon Suit" />
        </div>

        <div class="product-details">
            <div class="product-title">Maroon Two Buttons Slim Fit Suit</div>
            <div class="product-id">SID: TBSF001</div>
            <div class="product-price">RM524.00</div>

            <label class="label">SIZE</label>
            <select>
                <option>Select</option>
                <option>S</option>
                <option>M</option>
                <option>L</option>
                <option>XL</option>
            </select>

            <label class="label">QUANTITY</label>
            <div class="quantity">
                <button>-</button>
                <input type="text" value="1" style="width: 40px; text-align: center;" />
                <button>+</button>
            </div>

            <div class="actions">
                <button class="add-to-cart">Add To Cart</button>
                <div class="wishlist">♡</div>
            </div>

            <div class="product-info">
                <p><strong>Cutting:</strong> Slim Fit</p>
                <p><strong>Pattern:</strong> Plain</p>
                <p><strong>Button Style:</strong> Two Buttons</p>
            </div>
        </div>
    </div>
    <?php include 'component/footer.php'; ?>

</body>

</html>