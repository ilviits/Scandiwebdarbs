<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <link rel="stylesheet" href="styles.css" />
  <title>Product List</title>
</head>
<body>
  <div style="text-align: center; margin-bottom: 20px;">
    <form action='/addproduct' method="POST">
            <input type="submit" style="margin-left: 55%; margin-top: -6.5%" value="ADD" name = "checkbox"  id = "checkbox"/>
        </form>
    <button>Delete</button>
  </div>
  <h1 style="display: inline-block;">Product List</h1>
  <hr>
  <div>
    <div class="product-box">
      <input type="checkbox" class="checkbox">
      <h3>Product 1</h3>
      <p>Price: $10</p>
    </div>
    <div class="product-box">
      <input type="checkbox" class="checkbox">
      <h3>Product 2</h3>
      <p>Price: $20</p>
    </div>
    <div class="product-box">
      <input type="checkbox" class="checkbox">
      <h3>Product 3</h3>
      <p>Price: $30</p>
    </div>
    <div class="product-box">
      <input type="checkbox" class="checkbox">
      <h3>Product 4</h3>
      <p>Price: $40</p>
    </div>
  </div>
  <div class="footer">
    Scandiweb Test Assignment
  </div>
</body>
</html>
