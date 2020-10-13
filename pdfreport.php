<?php

session_start();
$name =$_SESSION["name"];  
$from = $_SESSION["from"]; 
$to = $_SESSION["to"];
$airlines = $_SESSION["airlines"];
$dep = $_SESSION["dep"];
$return = $_SESSION["return"];
$seat = $_SESSION["seat"];
$class = $_SESSION["class"];

require_once "E:\OthersFiles\New folder\htdocs\dompdf_0-8-6\dompdf\autoload.inc.php";

use Dompdf\Dompdf;


$dompdf = new Dompdf();

$dompdf->loadHTML('

<!doctype html>
<html>
<head>
<title>PDF REPORT E-TICKET</title>
</head>
<body>
<div style="width:1100px;height:750px;background-color:white;margin: 0 auto;">
<div class="col-sm-12">
    <h2 style="font-size: 23px;text-align: left;padding-top:20px;padding-left: 15px;">inFlynite Electronic Ticket Travel Itinerary</h2>
    <hr style="width:1000px;margin-left: 15px;border-width: 2px;border-color:#ef494d;margin-top: -5px;">
</div>
<div>
    <h4 style="margin-left:  15px;font-weight: 500;">PASSENGER NAME: <?php print {$name}; ?></h4>
    <h4 style="margin-top: -22px;margin-left: 15px;font-weight: 500;">TICKET NUMBER: 12312FD123</h4>
    <p style="font-size: small;margin-left: 15px;margin-top: -24px;">Reservation No: JFQAG4</p>
    <p style="margin-left:  15px;font-size:  small;margin-top: -16px;">Issued On: / INFLYNITE INTERNET TICKET / WWW</p>
</div>	
<div style="float: right;position: relative;top: -85px;margin-right: 100px;">
    <h5>inFlynite Service Center</h5>
    <h5 style="margin-top: -22px;">+49 180 30 00 337</h5>
</div>		 
<div style="margin-left: 15px;">
    <p style="line-height: 1.2;font-size: small;"><b>All times are noted local times. Please keep this receipt with you throughout your journey</b><br>
                    Your electronic INFLYNITE ticket is stored in our reservation system. As with all airline tickets your e-ticket is not transferable to others.<br></p>
</div>
        <h4><b>1) </b> FROM <b><?php echo $from ?></b> TO <b><?php echo $to ?></b></h4>
        <table style="border: 1.5px solid black;margin-left: 10px;margin-bottom: -25px;">
            <tbody >
                <tr style=>
                    <td style="padding-left: 3px;color:  black;padding-right: 5px;">Departure date</td>
                    <td style="border-right: 1px solid black;color: black;padding-right: 5px;">Seat</td>
                    <td style="padding-left: 7px;border-right: 1px solid black;color: black;padding-right: 5px;">Departure</td>
                    <td style="padding-left: 5px;color: black;border-right: 1px solid black;padding-right: 5px;">Arrival</td>
                    <td style="padding-left: 5px;color: black;border-right: 1px solid black;padding-right: 5px;">Class of Travel</td>
                    <td style="padding-left: 5px;color: black;padding-right: 5px;border-right: 1px solid black;">Status</td>
                    <td style="padding-left: 5px;color: black;padding-right: 5px;border-right: 1px solid black;">Baggage Allowance</td>
                </tr>
                <tr style="font-size: small;border: 1px solid black;">
                    <td style="padding-left: 3px;color: black;font-weight: 400;"><?php echo $dep ?></td>
                    <td style="border-right: 1px solid black;padding-left: 3px;font-weight: 400;color: black;"><?php echo $seat ?></td>
                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;font-weight: 400;padding-right: 5px;">14:10 TERMINAL A</td>
                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;font-weight: 400;padding-right: 5px;">16:20 TERMINAL A</td>
                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;padding-right: 5px;font-weight: 400;"><?php echo $class ?></td>
                    <td style="padding-left: 5px;border-right: 1px solid black;color: black;font-weight: 400;">OK</td>
                    <td style="padding-left: 5px;color: black;font-weight: 400;">23KG</td>
                </tr>
                <tr>
                    <td style="padding-left: 3px;padding-top: -5px;color: black;border-right: 1px solid black;border-bottom: 1px solid black;">Operated by</td>
                    <td style="border-right: 1px solid black;padding-left: 3px;border-bottom: 1px solid black;color: black;">On Behalf Of</td>
                    <td></td><td></td>
                    <td></td><td></td><td></td>
                </tr>
                <tr style="font-size: small;">
                    <td style="padding-left: 3px;border-right: 1px solid black;color: black;font-weight: 400;border-bottom: 1px solid black;">Inflynite</td>
                    <td style="border-right: 1px solid black;border-bottom: 1px solid black;color: black;padding-left: 3px;font-weight: 400;"><?php echo $airlines ?></td>
                    <td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr>
                    <td style="color: black;padding-left: 3px;border-right: 1px solid black;border-bottom: 1px solid black;">Not Valid Before</td>
                    <td style="color: black;border-right: 1px solid black;padding-left: 3px;border-bottom: 1px solid black;">Not Valid After</td>
                    <td></td><td></td><td></td><td></td><td></td>
                </tr>
                <tr style="font-size: small;">
                    <td style="padding-left: 3px;color: black;font-weight: 400;border-right: 1px solid black;"><?php echo $dep ?></td>
                    <td style="color: black;border-right: 1px solid black;padding-left: 3px;font-weight: 400;"><?php echo $dep ?></td>
                    <td></td><td></td><td></td><td></td><td></td></tr>
            </tbody>
        </table>
        <br>
    <p style="margin-bottom: -42px;margin-left: 15px;">Thank you for choosing inFlynite.</p><br>
    <p style="margin-bottom: -42px;margin-left: 15px;">Easy check-in not available yet.</p><br>
    <p style="margin-left: 15px;">For further inquiries contact: inFlynite.com/Contacts <br> </p>
    <p></p>
</div>
</body>
</html>');

$dompdf->setPaper('A4','landscape');

$dompdf->render();

//Output the generated PDF
$dompdf->stream("codexworld",array("Attachment" => 0));

?>