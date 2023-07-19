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
            <form action="scripts/homehandler.php" method="POST">

                <fieldset>

                <legend>Basic information</legend>

                <label for="intro">WHAT ARE YOU LOOKING FOR TODAY?</label>
                    <br>
                    <select multiple="multiple" id="intro" name="intro_qs">
                        <option value="buycar">buy car</option>
                        <option value="sellcar">sell car</option>
                        <option value="rentacar">rent car</option>
                        <option value="rentyourcar">rent your car</option>

                    <br></br>
                    <br></br>

                <label for="yourfullname1">YOUR NAME</label>
                    <br></br>
                    <input type="text" id="yourfullname1" name="yourfull_name1"></input>

                    <br></br>
                    <br></br>

                    <label for="otherrequests1">Mention any special requests below</label>
                    <br></br>
                    <textarea name="other_requests1" id="otherrequests1" cols="30" rows="10"></textarea>

                    <br></br>
                    <br></br>

                    <input type="submit" value="send"></input>
                    </fieldset>
            </form>
            <a href="scripts/view.php">View Database</a>
        </body>
</html>