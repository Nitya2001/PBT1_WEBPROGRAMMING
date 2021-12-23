<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Aromatica Spa</title>
</head>

<body>
    <div>
        
        <fieldset id="group1">
            <h1>Aromatica Spa</h1>
            <div>
                <ul>
                    <li>Aromatica Spa</li>
                    <li>Kangar, Perlis</li>
                    <li>03-2003444</li>
                    <li>aromaticaspa.com</li>
                </ul>
                We locally owned and operated Aromatica Spa! Outstanding spa
                treatments in Facials, Massages, Body Treatment, Makeup,
                Waxing and Hair Threading. Come in and select one of our
                Spa Packages with our top professional Aestheticians and
                Massage Therapists. Organic Spa Massage & Skincare is a
                spacious haven of pampering.
            </div>

        </fieldset>
    </div> <br>

    <center>

    <form id="orderProduct" method="post" action="result.php">
    <table border="1">
            <tr>
                <td>
                    <h1>Massage RM50 +</h1>
                    
                </td>
                <td>
                    <input type="checkbox" name="cb1" value="1" id="one">
                    <label>Organic Foot Scrub Rm30</label><br>
                    <input type="checkbox" name="cb2" value="2" id="two">
                    <label>Cold Stone Facial Massage RM30</label><br>
                    <input type="checkbox" name="cb3" value="2" id="three">
                    <label>Scalp Massage with Organic Apricot Oil RM30</label><br>
                </td>
            </tr>
            <tr>
                <td>
                    <h1>Facials RM70+</h1>
                    
                </td>
                <td>
                    <input type="checkbox" name="cb4" value="1" id="one">
                    <label>Lip & Eye Treatment Rm40</label><br>
                    <input type="checkbox" name="cb5" value="2" id="two">
                    <label>Lash Tinting RM20</label><br>
                    <input type="checkbox" name="cb6" value="2" id="three">
                    <label>Eyebrow Tinting RM20</label><br>
                </td>
            </tr>

            <tr>
                <td>
                    <h1>Waxing and Threading RM40 +</h1>
                    
                </td>
                <td>
                    <input type="checkbox" name="cb7" value="1" id="one">
                    <label>Arm RM50</label><br>
                    <input type="checkbox" name="cb8" value="2" id="two">
                    <label>Back RM100</label><br>
                    <input type="checkbox" name="cb9" value="2" id="three">
                    <label>Legs RM60</label><br>
                </td>

                <tr>
                <td>
                    <h1>Makeup RM60 +</h1>
                    
                </td>
                <td>
                    <input type="checkbox" name="cb11" value="1" id="one">
                    <label>Lash Tint Rm20</label><br>
                    <input type="checkbox" name="cb12" value="2" id="two">
                    <label>Eyebrow Tint RM20</label><br>
                </td>
            </tr>
            <tr>
                <td colspan="6">
                    <center>
                    <button type="submit">Pay</button>
                    <button type="reset">Reset</button>
                    <center>
                </td>
            </tr>
           
        </table>
    </form>
    <center>
</body>

</html>