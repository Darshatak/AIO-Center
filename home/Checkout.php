
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="/login/css/checkout.css">
</head>
<body background="/login/Media/tiupa.jpg">


<div class="Fields">

<div>
<div class="formContainer">
<form action="checkout_submit.php" method="POST">
<h1 style="text-align: center;">Checkout Gateway</h1>
<div class="Fields">
<div>
<h3>Billing Address</h3>
<label for="fname">Full Name</label>
<input type="text" id="fname" name="fname" required/>
<label for="email"> Email</label>
<input type="text" id="email" name="email" required/>
<label for="adr"> Address</label>
<input type="text" id="adr" name="address" required/>
</div>
<div>
<h3>Payment</h3>
<label for="cname">Name on Card</label>
<input type="text" id="cname" name="cardname" required/>
<label for="ccnum">Debit card number</label>
<input type="text" id="ccnum" name="cardnumber"required />
<div class="Fields">
<div>
<label for="expyear">Exp Year</label>
<input type="text" id="expyear" name="expyear" required/>
</div>

<div>
<label for="cvv">CVV</label>
<input type="text" id="cvv" name="cvv"required />
</div>


</div>
<div>
<label for="cvv">Write Only The Plan Name For Confirmation</label>
<input type="text" id="plans" name="plans"required />
</div>
</div>

<h3 style="display: flex; flex-direction: column; align-items: center;">
    Pricing
<br><br><br>
<centre>
<div>
<input type="radio"  name="Plan" value="Plan 1" required>&nbsp;&nbsp;Plan 1&nbsp; --₹299</radio>
</div>
<br><br>

<div>
<input type="radio" name="Plan" value="Plan 2" required>&nbsp;&nbsp;Plan 2&nbsp; --₹599</radio>
</div>

<br><br>
</centre>
<div>
<input type="radio"  name="Plan" value="Plan 3" required>&nbsp;&nbsp;Plan 3&nbsp; --₹999</radio>
</div>
</h3>
</div>

<input
type="submit"
value="Continue to checkout"
class="checkout"
/>
</form>
</div>
</div>


</div>
</div>
</div>



                            <ul style="display: flex; flex-direction: column; align-items: center;">
                                <li class="nav-item"><a href="/login/home/welcome.php" class="btn btn-outline-dark my-3 my-sm-0 ml-lg-3" style="background-color:aliceblue; color: black;">Back</a></li>
                            </ul>

</body>
</html>