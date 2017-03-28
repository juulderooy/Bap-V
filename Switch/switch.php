<form method="post">
    <label>Voer een drank in:</label>
    <input type="text" name="beverage"> <br/>
    <input type="submit" name="submit" value="Go!">



</form>



<?php

    $beverage = $_POST['beverage'];

    switch ($beverage) {

        case 'cola':
            echo 'Drink is cola';
            echo "<img src=\"http://www.sorajas.nl/images/stories/virtuemart/product/cola.png\" width=\"450px\" height=\"450px\">";
            break;
        case 'beer':
            echo 'Drink not allowed!';
            echo "<img src=\"http://www.northernbrewer.com/media/catalog/product/cache/2/image/450x/9df78eab33525d08d6e5fb8d27136e95/i/m/image_3496.jpg\" width=\"450px\" height=\"450px\">";
            break;
        case 'water':
            echo 'Drink is water';
            echo "<img src=\"http://www.newhealthadvisor.com/images/evian.jpg\" width=\"450px\" height=\"450px\">";
            break;
        default:
            echo 'I dont know what drink that is';
            echo "<img src=\"http://pccweb.ca/standrewsdresden/files/2016/03/Question-mark.png\" width=\"450px\" height=\"450px\">";
    }
?>
