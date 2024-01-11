<?php

session_start();
if (isset($_SESSION['email'])) {
  $sessionsab=$_SESSION['email'];

}
require('fpdf/fpdf.php');

if(isset($_POST['submitpdf'])){
    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial","B",14);
    $pdf->Cell(0, 10, "Tax Invoice", 0, 1 ,'C');

    // Add the logo at coordinates (10, 20)
    $pdf->Image('logo.jpg', 10, 20, 60);

    // Set font and add text for your company details
    $pdf->SetY(34);
    $pdf->SetFont("helvetica", "", 12);
    $pdf->Cell(0, 4, "S.G.ENTERPRISES", 0, 1); // Centered text with no border
    $pdf->Cell(0, 4, "T-8, Ramesh Nagar, New Delhi - 110015", 0, 1); // Centered text with no border
    $pdf->Cell(0, 4, "Tel: 9811571249, 8920994612", 0, 1); // Centered text with no border
    $pdf->Cell(0, 4, "Email: sgavsolution767@gmail.com", 0, 1); // Centered text with no border
    $pdf->Cell(0, 5, "GSTIN: 07ARIPK4907H1ZQ", 0, 1); // Centered text with no border

    // Get the width of "Invoice No : 2" text
    $textWidth = $pdf->GetStringWidth("Invoice No : 2");
    // Get the page width
    $pageWidth = $pdf->GetPageWidth();

    // Calculate the X and Y coordinates for the "Invoice No : 2" text
    $xPosition = $pageWidth - $textWidth - 50; // Adjust the right margin
    $yPosition = 26; // Adjust the vertical position as needed

    // Set the X and Y positions and add the "Invoice No : 2" text
    $pdf->SetXY($xPosition, $yPosition);
    $pdf->SetFont("helvetica", "", 12);
    $pdf->Cell(0, 20, "Invoice No : 2", 0, 1);
    $pdf->SetXY($xPosition, $yPosition);
    $pdf->Cell(0, 30, "Date : 20/10/2023", 0, 1);
    $pdf->SetXY($xPosition, $yPosition);
    $pdf->Cell(0, 40, "State : Delhi", 0, 1);
    $pdf->SetXY($xPosition, $yPosition);
    $pdf->Cell(0, 50, "State Code : 07", 0, 1);


     $pdf->SetY(64);
    $pdf->SetFillColor(0); // Set background color to black
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->SetTextColor(255);
    $pdf->Cell(0, 6, " ", 0, 1, 'L', 1);
    $pdf->Cell(0, 6, " Billing Address of Party", 0, 1, 'L', 1); // The last '1' argument is for a filled background
    $pdf->SetFont('helvetica', '', 12);

      $pdf->Cell(0, 6, " Name: Parvrsh Anand ", 0, 1, 'L', 1);
        $pdf->Cell(0, 6, " Address :Fd-9 Tagore Garden ", 0, 1, 'L', 1);
         $pdf->Cell(0, 6, " State: Delhi ", 0, 1, 'L', 1);
           $pdf->Cell(0, 6, " State Code: 07 ", 0, 1, 'L', 1);
           $pdf->Cell(0, 6, " ", 0, 1, 'L', 1);


 
    $pageWidth_sd = $pdf->GetPageWidth();
    $xPosition_s = $pageWidth_sd - $textWidth - 50;
    $pdf->SetXY($xPosition_s, $yPosition);
    $pdf->SetFont('helvetica', 'B', 12);
    $pdf->Cell(0, 94, "Shipping Address of Party", 0, 1);
    $pdf->SetXY($xPosition_s, $yPosition);
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 106, "Name: Parvesh Anand", 0, 1);
    $pdf->SetXY($xPosition_s, $yPosition);
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 118, "Address :Fd-9 Tagore Garden", 0, 1);
    $pdf->SetXY($xPosition_s, $yPosition);
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 130, "State: Delhi ", 0, 1);   
    $pdf->SetXY($xPosition_s, $yPosition);
    $pdf->SetFont('helvetica', '', 12);
    $pdf->Cell(0, 142, "State Code: 07 ", 0, 1);
    
    $pdf->SetY(110);  
    $pdf->SetFont("helvetica", "", 12);
    $pdf->SetTextColor(0);

    $pdf->Cell(15, 10, "S.No", 1);
    $pdf->Cell(60, 10, "Product Description", 1);
    $pdf->Cell(30, 10, "HSN CODE", 1);
    $pdf->Cell(20, 10, "Qty", 1);
    $pdf->Cell(40, 10, "Unit Rate (Per Mtr)", 1);
    $pdf->Cell(26, 10, "Amount", 1);
    $pdf->Ln(); // Move to the next line

    // Add your product data
    $pdf->SetFont("helvetica", "", 12);
    $pdf->Cell(15, 10, "1", 1);
    $pdf->Cell(60, 10, "Pro Speaker Cable (Oxycraft)", 1);
    $pdf->Cell(30, 10, "", 1); // You can add HSN CODE here
    $pdf->Cell(20, 10, "30 mtr", 1);
    $pdf->Cell(40, 10, "45.00", 1);
    $pdf->Cell(26, 10, "1,350", 1);
    $pdf->Ln(); // Move to the next line

    // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(15, 10, "2", 1);
     $pdf->Cell(150, 10, "CGST Rate 9% ", 1);
     $pdf->Cell(26, 10, "121.50 ", 1);
     $pdf->Ln();
      // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(15, 10, "3", 1);
     $pdf->Cell(150, 10, "SGST Rate 9% ", 1);
     $pdf->Cell(26, 10, "121.50 ", 1);
     $pdf->Ln();
     
       // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(15, 10, "5", 1);
     $pdf->Cell(60, 10, "Total GST Amount", 1);
     $pdf->Cell(20, 10, "CGST + ", 1);
     $pdf->Cell(20, 10, "SGST + ", 1);
     $pdf->Cell(20, 10, "IGST  ", 1);
     $pdf->Cell(30, 10, " ", 1);
     $pdf->Cell(26, 10, "243.00", 1);
     $pdf->Ln();
       // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(15, 10, "5", 1);
     $pdf->Cell(60, 10, "Total Amount After GST", 1);
     $pdf->Cell(20, 10, "121.50", 1);
     $pdf->Cell(20, 10, "121.50 ", 1);
     $pdf->Cell(20, 10, "0.00", 1);
     $pdf->Cell(30, 10, "", 1);
     $pdf->Cell(26, 10, "1593.00", 1);
     $pdf->Ln();
        // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(61, 10, "Bank Name", 1);
      $pdf->SetFont("helvetica", "B", 12);
     $pdf->Cell(104, 10, "State Bank of India", 1);
     $pdf->Cell(26, 10, "", 1);
     $pdf->Ln();
     // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(61, 10, "Bank A/c No", 1);
      $pdf->SetFont("helvetica", "B", 12);
     $pdf->Cell(104, 10, "65151065665", 1);
     $pdf->Cell(26, 10, "", 1);
     $pdf->Ln();
       // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(61, 10, "Branch", 1);
      $pdf->SetFont("helvetica", "B", 12);
     $pdf->Cell(104, 10, "Mohan Garden", 1);
     $pdf->Cell(26, 10, "", 1);
     $pdf->Ln();
      // ... Add more product data if needed
     $pdf->SetFont("helvetica", "", 12);
     $pdf->Cell(61, 10, "IFSC", 1);
      $pdf->SetFont("helvetica", "B", 12);
     $pdf->Cell(104, 10, "SBIN0051204", 1);
     $pdf->Cell(26, 10, "", 1);
     $pdf->Ln();


    // Add the Total amount
    $pdf->SetFont("helvetica", "B", 12);
    $pdf->Cell(165, 10, "Total Amount :", 1);
    $pdf->Cell(26, 10, "1,350.00", 1);
 


    $pdf->SetFont("Helvetica", "", 10);
    // Set the position and cell width
    $pdf->SetY(224);  // Adjust the Y position to fit within the page
    $cellWidth = 190;  // Adjust the cell width to fit within the page

    // The text to be displayed
    $text = "
    (1) : All disputes are subject to the jurisdiction of Delhi Courts Only 
    (2) : Any taxes on inter-state transactions, if levied by your state, shall be charged extra 
    (3) : All goods are dispatched at the purchaser's risk, and our liability ceases once the goods leave our premises. 
    We are not responsible for breakage and pilferage. 
    (4) : All goods under this invoice shall remain our property until full payment is realized. 
    (5) : Goods once sold will not be taken back 
    (6) : E & O.E";

    // Output the text in a cell
    $pdf->MultiCell($cellWidth, 4, $text, 0, 'l');
     
     ////////////////////////
     $pdf->SetFont("Helvetica", "B", 10);
    // Set the position and cell width
    $pdf->SetY(260);  // Adjust the Y position to fit within the page
    $cellWidths = 190;  // Adjust the cell width to fit within the page

    // The text to be displayed
    $texts = "Certified that the particulars given above are true and correct.";

    // Output the text in a cell
    $pdf->MultiCell($cellWidths, 4, $texts, 0, 'C');



    $pdf->Output();
    exit; // Make sure to exit the script after generating the PDF
}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  
</head>
<body>
    <form action="pdf.php"  method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary" name="submitpdf">Submit</button>
</form>

</body>
</html>

