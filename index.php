<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="css/style.css"> -->
    <title>PIZZA</title>
</head>
<!--  -->
<!--  -->
<!--  -->

<body>
    <h1>maak je eigen pizza!</h1>
    <form action="create.php" method="post">
        <label for="pizzaformaat">Bodemformaat:</label><br>
        <select id="pizzaformaat" name="pizzaformaat">
            <option value="">maak een keuze</option>
            <option value="20 centimeter">20centimeter</option>
            <option value="25 centimeter">25centimeter</option>
            <option value="30 centimeter">30centimeter</option>
            <option value="35 centimeter">35centimeter</option>
            <option value="40 centimeter">40centimeter</option>
        </select> <br> <br>
        <label for="sauce">saus:</label><br>
        <select id="sauce" name="sauce">
            <option value="">maak een keuze</option>
            <option value="Tomatensaus">Tomatensaus</option>
            <option value="Extra Tomatensaus">Extra Tomatensaus</option>
            <option value="Spicy Tomatensaus">Spicy Tomatensaus</option>
            <option value="BBQ saus">BBQ saus</option>
            <option value="Creme fraiche">Creme fraiche</option>
        </select> <br><br>
        <label>Pizzatoppings</label><br>
        <input type="radio" id="topping" name="topping" value="Vegan">
        <label for="topping">Vegan</label><br>
        <input type="radio" id="topping" name="topping" value="Vegatarsich">
        <label for="topping">vegatarisch</label><br>
        <input type="radio" id="topping" name="topping" value="Vlees">
        <label for="topping">vlees</label> <br><br>
        <label>Kruiden</label><br>
        <input type="checkbox" id="spices" name="spices" value="Peterselie">
        <label for="spices">Peterselie</label><br>
        <input type="checkbox" id="spices" name="spices" value="Oregano">
        <label for="spices">Oregano</label><br>
        <input type="checkbox" id="spices" name="spices" value="Chili Flakes">
        <label for="spices">Chili Flakes</label> <br>
        <input type="checkbox" name="spices" value="Zwarte peper">
        <label for="spices">Zwarte peper</label> <br><br>
        <input type="submit" value="Bestel">
        </label><br>
    </form>
</body>

</html>