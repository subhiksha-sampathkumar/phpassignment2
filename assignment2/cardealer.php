<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <meta charset="UTF-8"></meta>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"></meta>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <meta name="description" content="Just a form"></meta>
    <link href="css/stylesheet.css" rel="stylesheet" type="text/css"></link>
</head>
        <body>   
            <form action="scripts/cardealerhandler.php" method="POST">
                <fieldset>
                <legend>Cars and dealers information</legend>

                <label for="yourfullname2">YOUR NAME</label>
                    <br></br>
                    <input type="text" id="yourfullname2" name="yourfull_name2"></input>

                    <br></br>
                    <br></br>
                    
                    <label for="carbrandname">Car Brand Name</label>
                    <br></br>
                    <label for='carbrandname'>Select the Car Brand Name:</label>
                    <br></br>
                    <select multiple="multiple" id="carbrandname" name="car_brandname">
                        <option value="ferrari">Ferrari</option>
                        <option value="lamborghini">Lamborghini</option>
                        <option value="audi">Audi</option>
                        <option value="mercedes">Mercedes</option>
                        <option value="bmw">BMW</option>
                        <option value="ford">Ford</option>
                    </select>
                    
                    <br></br>
                    <br></br>

                    <label for="carpricerange">Enter desired car price range</label>
                    <br></br>
                    <input type="number" id="carpricerange" name="car_pricerange"></input>

                    <br></br>
                    <br></br>

                    <label for='dealerslist'>Select you Car Dealer:</label>
                    <br></br>
                    <select multiple="multiple" id="dealerslist" name="dealers_list">
                        <option value="johndoe">john doe</option>
                        <option value="janedoe">jane doe</option>
                        <option value="willsmith">will smith</option>
                        <option value="bradpitt">brad pitt</option>
                        <option value="jacksparrow">jack sparrow</option>
                    </select>

                    <br></br>
                    <br></br>

                    <label for="dealerlocation">Choose Dealer Location</label>
                    <br>
                    <select multiple="multiple" id="dealerlocation" name="dealer_location">
                        <option value="dundas">dundas</option>
                        <option value="queenst">queenst</option>
                        <option value="kingst">kingst</option>
                        <option value="yongest">yongest</option>
                        <option value="spadina">spadina</option>
                    </select>
                    
                    <br></br>
                    <br></br>

                    <label for="otherrequests2">Mention any special requests below</label>
                    <br></br>
                    <textarea name="other_requests2" id="otherrequests2" cols="30" rows="10"></textarea>

                    <br></br></br>
                    <br></br>

                    <input type="submit" value="send"></input>
                </fieldset>
            </form>
            <a href="scripts/view.php">View Database</a>

        </body>
</html>