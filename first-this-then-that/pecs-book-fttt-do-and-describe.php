<?php
  include "database.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>PECS-Online - Welcome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=2">
<link rel="stylesheet" href="styles/pecs-general.css">

<div class="header white-text">
  <img src="images/pecs-online-logo.png" alt="PECS-Online" style="width:10%; height:10%;">
  <div class="back-button-header">
  <a href="../welcome.html">
    <button class="button button8 white-text image-button">
      <span><img src="../images/back.png" style="width: 100px;"></span>
      <span>Back</span>
    </button>
  </a>
  </div>
</div>

<div class="header white-text">
  <h6>Move the symbols into the green sentence strip's gaps, then press show</h6>
</div>
</head>
<body>


<div class="pecs-book-page do-and-describe-bg">
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-big.html">
    <img src="../images/symbols/do-and-describe/big.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-little.html">
    <img src="../images/symbols/do-and-describe/little.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-brush-hair.html">
    <img src="../images/symbols/do-and-describe/brush-hair.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-brush-teeth.html">
    <img src="../images/symbols/do-and-describe/brush-teeth.JPG" >
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-first.html">
    <img src="../images/symbols/do-and-describe/first.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-then.html">
    <img src="../images/symbols/do-and-describe/then.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-get-dressed.html">
    <img src="../images/symbols/do-and-describe/get-dressed.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-i-hear.html">
    <img src="../images/symbols/do-and-describe/i-hear.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-i-see.html">
    <img src="../images/symbols/do-and-describe/i-see.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-i-smell.html">
    <img src="../images/symbols/do-and-describe/i-smell.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-i-want.html">
    <img src="../images/symbols/do-and-describe/i-want.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-tidy-up.html">
    <img src="../images/symbols/do-and-describe/tidy-up.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-visit-family.html">
    <img src="../images/symbols/do-and-describe/visit-family.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-wash-face.html">
    <img src="../images/symbols/do-and-describe/wash-face.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-wash-hair.html">
    <img src="../images/symbols/do-and-describe/wash-hair.JPG">
    </a>
  </div>
  <div class="symbol-in-pecs-book">
    <a href="do-and-describe/basic-wash-hand.html">
    <img src="../images/symbols/do-and-describe/wash-hand.JPG">
    </a>
  </div>
</div>

<!--
<div class="footer">
  <p>Footer</p>
</div>
-->

</body>
</html>
<?php
mysqli_close($conn);
?>