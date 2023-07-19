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
                <form action="scripts/contacthandler.php" method="POST">

                <fieldset>

                <legend>ENTER YOUR DETAILS BELOW AND WE'LL CONTACT YOU (within 72 hours) </legend>

                <label for="yourfirstname">YOUR FIRST NAME</label>
                    <br>
                    <input type="text" id="yourfirstname" name="yourfirst_name">

                    <br></br>
                    <br></br>

                        <label for="yourlastname">YOUR LAST NAME</label>
                        <br>
                        <input type="text" id="yourlastname" name="yourlast_name">

                        <br></br>
                        <br></br>

                    <label for="yourphone">YOUR PHONE NUMBER</label>
                    <br>
                    <input type="number" id="yourphone" name="your_phone">

                    <br></br>
                    <br></br>

                    <label for="youremail">YOUR EMAIL</label>
                    <br></br>
                    <input type="text" id="youremail" name="your_email">

                    <br>
                    <br></br></br>

                    <label for="otherrequests3">Mention your issue below</label>
                    <br>
                    <textarea name="other_requests3" id="otherrequests3" cols="30" rows="10"></textarea>

                    <br>
                    <br></br></br></br>

                    <input type="submit" value="send">
                </fieldset>
                </form>
                <a href="scripts/view.php">View Database</a>
        </body>
</html>

