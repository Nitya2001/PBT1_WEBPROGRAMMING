<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aromatica Spa</title>
    <link rel="stylesheet" href="style.css">
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
    </div>
    <form id="orderProduct" method="post" action="result.php">
        <label>Select Service</label>
        <select id="select1" onchange="fun1()">
            <option></option>
            <option value="1">Massage RM50</option>
            <option value="2">Facials RM70</option>
            <option value="3">Waxing & Threading RM40</option>
            <option value="4">Makeup RM60</option>
        </select><br><br>
        <fieldset id="massage">
            <p>Massage RM50 +</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Organic Foot Scrub Rm30</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Cold Stone Facial Massage RM30</label><br>
            <input type="checkbox" name="cb" value="2" id="three">
            <label>Scalp Massage with Organic Apricot Oil RM30</label><br>
        </fieldset>
        <fieldset id="facial">
            <p>Facials RM70 +</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Lip & Eye Treatment RM40</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Lash Tinting RM20</label><br>
            <input type="checkbox" name="cb" value="2" id="three">
            <label>Eyebrow Tinting RM20</label><br>

        </fieldset>
        <fieldset id="waxing">
            <p>Waxing & Threading RM40 +</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Arm RM50</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Back RM100</label><br>
            <input type="checkbox" name="cb" value="3" id="three">
            <label>Legs RM60</label><br>

        </fieldset>
        <fieldset id="makeup">
            <p>Makeup RM60 +</p>
            <input type="checkbox" name="cb" value="1" id="one">
            <label>Lash Tint RM20</label><br>
            <input type="checkbox" name="cb" value="2" id="two">
            <label>Eyebrow Tint RM20</label><br>

        </fieldset>
        <br><input class="submit" type="submit" value="Order">
        <input class="reset" type="reset" value="Reset">
    </form>
</body>

</html>
<script>
    fun2();

    function fun1() //display selected service
    {
        var xx = document.getElementById('select1').value;
        fun2();
        if (xx == 1) {
            document.getElementById('massage').style.display = "block";
        } else if (xx == 2) {
            document.getElementById('facial').style.display = "block";
        } else if (xx == 3) {
            document.getElementById('waxing').style.display = "block";
        } else if (xx == 4) {
            document.getElementById('makeup').style.display = "block";
        } else {}
    }

    function fun2() //hide unselected service
    {
        document.getElementById('massage').style.display = "none";
        document.getElementById('facial').style.display = "none";
        document.getElementById('waxing').style.display = "none";
        document.getElementById('makeup').style.display = "none";
    }
</script>