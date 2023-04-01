<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  
</head>
<style>
  @page{margin: 0.2in 0.5in 0.2in 0.5in;}
  .heading_logo{

  }
  .heading_text{
    color:#87CEEB;
   
    font-weight:bold;
    font-size:16px;
    border-top:none;
    border-left:none;
    border-bottom:none;
  }
  .empty_filed{
    border:2px solid black;
    width: 100%;
    height:40px;
    margin-top:8%;
  }
  .empty_filed_2{
    border-left:2px solid black;
    border-right:2px solid black;
    border-bottom:1px solid black;
    width: 100%;
    height:20px;

  }
  .main_heading{
    border:2px solid black;
    margin-top:3px;
    font-size:13px;
    border-bottom: none;
    padding:-8px;
  }
  .address_heading{
    border:2px solid black;
    width: 100%;
    margin-top:5px;
  }
  .td_th{
    border: 2px solid black;
    border-collapse: collapse;
    border-top: none;
    font-size:11px;
  }
  .td_tb{
    border: 2px solid black;
    border-collapse: collapse;
    border-top: none;
    border-right: none;
    border-bottom: none;
    border-left:  1px solid white;
    font-size:11px;
  }
  .footer_table{
    border: 2px solid black;
    border-collapse: collapse;
    border: none;
    font-size:11px;
    
  }
  .footer_text{
    font-size:11px;
  }
  .Conditions{
    border:2px solid black;
  }
  .sing{
    height:15%;
    border:2px solid black;
    border-top: none;
    font-size:10px;
  }

</style>
<body class="">
  
<?php  foreach($report as $row){
 }?>
     <div>
      <p></p>
      <table class = "heading_logo" style="width:100%;">
        <tr>          
          <td style="width:10%;" ><img src="https://dbvertex.com/Electricalvehical/uplode/images/logo.jpg" style="height:60px; width:60px;" class="img-fluid"></td>
          <td class ="heading_text">MOBI PROTECT</td>
          <td class ="heading_text"  style=" text-align: right; font-size:13px;">7974641726 <span style="font-size:10px; margin-top:10px;" >(Whatsapp)  <img src="https://dbvertex.com/Electricalvehical/uplode/images/whatsaap.jpg" style="height:15px; width:15px;  margin-top:10px;  padding-left:5px;" class="img-fluid"></span></td>
        </tr>
      </table>
     </div>

     <div class="empty_filed">
     </div>

    <div class="main_heading" style="text-decoration: underline;  text-underline-offset: 3px;">
      <p style="text-align:center;   font-weight: bold;  ">MOBI PROTECT ALL RISKS INSURANCE POLICY SCHEDULE</p>
    </div>

     <div class="">
        <table class="td_th" style="width:100%;  border-top: 1px solid black;">
          <tr>
          <th class="td_th" style=" text-align: left; width:50%;" >Corporate Office/Policy Issuing Office:</th>
          <th class="td_th" style=" text-align: left;">Policy Sourcing/Servicing Branch Office:</th> 
          </tr>
          <tr style="text-align:center;  padding:3px;" >
          <td class="td_th" style=" padding:3px; text-align: left;">MOBI PROTECT NEAR OLD ARPA BRIDGE PRATAP CHOWK, BILASPUR CHHATTISGARH </td>
            <td class="td_th">MOBI PROTECT NEAR OLD ARPA BRIDGE PRATAP CHOWK, BILASPUR CHHATTISGARH</td>
            </tr>
          </table>
     </div>

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style=" border-top: none;">
            <th style="  padding-left:5px; text-align: left;" class="Agency_Code">Shop / Organisation Name</th>
            <th style="width:80%;  text-align: left; font-weight:200;" class="td_th"><?php {echo $report->bank_name;}?> </th> 
          </tr>
         </table>
       </div>  
     
      <div class="">
        <table class="td_th" style="width:100%;" >
          <tr >
          <th style="text-align: left; width:14.5%; padding:3px;" class="td_th" >Master Policy No :</th>
          <th style="text-align: left;  width:100px;  border-left: none; font-weight:200;" class="td_th">920292229320000023</th> 
          <th style="text-align: left; width:0%;" class="td_th">Policy Certificate No :</th>
          <th style="text-align: left; width:100px; font-weight:200;" class="td_th"><?php {echo $report->policy_numbers;}?> </th> 
          </tr>
          </table>
      </div>

       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%; padding:3px;  text-align: left;" class="Agency_Code">Tax Invoice and Date:</th>
            <th style="  text-align: left; font-weight:200; " class="td_th"><?php {echo $report->invoice_no;}?> & <?php {echo date('d-M-Y', strtotime($report->policy_start));}?></th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%; padding:3px;  text-align: left;" class="Agency_Code">Date of proposal & declaration: </th>
            <th style=" font-size:12px; text-align: left; font-weight:200; " class="td_th"><?php {echo date('d-M-Y', strtotime($report->policy_start));}?></th>
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%;  padding:3px; text-align: left;" class="Agency_Code">Name of the Insured :</th>
            <th style="font-size:12px; text-align: left; font-weight:200; " class="td_th"><?php {echo $report->name_policy_holder;}?></th> 
          </tr>
         </table>
       </div>  
        
       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%; padding:3px;   text-align: left;" class="Agency_Code">Communication Address & place of Supply </th>

            <th style="font-size:12px; text-align: left; font-weight:200; " class="td_th">
            <table class="td_tb" style="width:100% ">
            <tr >
            <th style=" width:40%;  black; border-bottom:  2px solid black; font-size:10px; text-align: left;; " class="">Address 1</th>
            <th style=" width:40%;  black; border-bottom:  2px solid black; border-left:  2px solid black; font-size:10px; text-align: left; " class="">Address 2</th>
            <th style="font-size:10px;  border-left:  2px solid black; border-bottom:  2px solid black; text-align: left;  " class="">city</th>
            </tr>
              <tr>
                <td style="font-size:10px; text-align: left; font-weight:200; " class=""><?php {echo $report->address_line_1;}?></td>
                <td style="font-size:10px;  border-left:  2px solid black; text-align: left; font-weight:200; " class=""><?php {echo $report->address_line_2;}?></td>
                <td style="font-size:10px;  border-left:  2px solid black; text-align: left; font-weight:200; " class=""><?php {echo $report->city;}?></td>
              </tr>
              </table>  
          </th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%; padding:3px;  text-align: left;" class="Agency_Code">Period of Insurance: </th>
            <th style=" font-size:12px; text-align: left; font-weight:200; " class="td_th">From : 00:00 Hours <?php {echo date('d-m-Y', strtotime($report->policy_start));}?> To Mid-Night of: <?php {echo date('d-m-Y', strtotime($report->exprie_date));}?></th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%;  padding:3px; text-align: left;" class="Agency_Code">GSTIN / UIN of Insured:</th>
            <th style=" font-size:12px; text-align: left; font-weight:200; " class="td_th">NA</th> 
          </tr>
         </table>
       </div>  


       <div class="">
         <table class="td_th" style="width:100%">
          <tr style=" border-top: none;">
            <th style="width:27%; padding:3px;   text-align: left;" class="Agency_Code">Total sum insured</th>
            <th style=" font-size:12px; text-align: left; font-weight:200; " class="td_th"><?php {echo $report->sum_insured;}?></th> 
          </tr>
         </table>
       </div>  

      
        
        <div class="">
         <table class="td_th" style="width:100%;">
          <tr>
          <th class="td_th" style=" text-align: left; font-weight:200;" >RGICL</th>
          <th class="td_th" style=" text-align: center;">100%</th> 
          </tr>
          </table>
        </div>
           
         <div class="empty_filed_2"> 
          </div>
           
       <div class="">
         <table class="td_th" style="width:100%;   border-top: 1px solid black;">
          <tr>
          <th class="td_th" style=" text-align: left; font-size:12px; width:15%;" >Loc. No.</th>
          <th class="td_th" style=" text-align: left;  width:35%;">Location Address</th> 
          <th class="td_th" style=" text-align: left; padding:3px; width:20%;" >Description of Property Insured</th>
          <th class="td_th" style=" text-align: left;">Identification Number</th> 
          <th class="td_th" style=" text-align: left;" >Sum Insured (in Rs)</th>
         
          </tr>
          <tr style="text-align:center;  padding:3px;" >
          <td class="td_th" style=" padding:3px; text-align: left;">1</td>
            <td class="td_th"><?php {echo $report->address_line_1;}?></td>
            <td class="td_th"></td>
            <td class="td_th"></td>
            <td class="td_th"><?php {echo $report->sum_insured;}?></td>
            </tr>
          </table>
       </div>

        <div class="">
          <table class="td_th" style="width:100%" >
            <tr style=" ">
              <th style="  width:87.2%;  text-align: left;" class="Agency_Code">Total Sum Insured.(Rs.)</th>
              <th style="  text-align: left; font-weight:200;" class="td_th"><?php {echo $report->sum_insured;}?></th> 
            </tr>
          </table>
        </div>  
         
        <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style=" ">
            <th style="  width:30%;  text-align: left;" class="Agency_Code">Risk Covered</th>
            <th style="  text-align: left; font-weight:200;" class="td_th">MOBILE PROTECTION </th> 
          </tr>
         </table>
       </div>  

       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style=" ">
            <th style="  width:30%;padding-bottom:8px;  text-align: left;" class="Agency_Code">Make and Model</th>
            <th style="  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->make;}?></th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Year of Manufacturing</th>
            <th style="  text-align: left;padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->tear_manufacturing;}?></th> 
           
          </tr>
         </table>
       </div>  
       
       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Battery (in KW)</th>
            <th style=" width:22.2%;  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->Battery_kw;}?></th> 
            <th style=" width:25.7%;  text-align: left; padding-bottom:8px; " class="td_th">Seating Capacity</th> 
            <th style="  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th">2</th> 
          </tr>
         </table>
       </div>  
       
         
       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Battery Number</th>
            <th style=" width:22.2%;  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->Battery_No;}?></th> 
            <th style=" width:25.7%;  text-align: left; padding-bottom:8px; " class="td_th">Chassis Number</th> 
            <th style="  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->Chassis_No;}?></th> 
          </tr>
         </table>
       </div>  
       
       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>

        <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Financier Name</th>
            <th style=" width:22.2%;  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->finacer_name;}?></th> 
            <th style=" width:25.7%;  text-align: left; padding-bottom:8px; " class="td_th">Financier Type</th> 
            <th style="  text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->financer_type;}?></th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Financier Address </th>
            <th style="   text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->finacer_address;}?></th> 
          </tr>
         </table>
       </div>  
         
       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>
         
        <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Excess </th>
            <th style="   text-align: left; padding-bottom:8px; font-weight:200;" class="td_th">2.5% of the claim amount subject to minimum of Rs. 250/- in each and every claim.</th> 
          </tr>
         </table>
       </div>  
         
       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>
          
        <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Warranties Applicable</th>
            <th style="   text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"></th> 
          </tr>
         </table>
       </div>  
        
       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>

        <div class="footer_table" style="margin-top:40px;">
         <table class="footer_table" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  padding-bottom:8px; text-align: left; font-weight:200;" class="Agency_Code">MOBI PROTECT</th>
            <th style="   text-align: left; padding-bottom:8px; font-weight:bold;" class="footer_table"></th> 
            <th style="   text-align: right; padding-bottom:8px; font-weight:200;" class="footer_table">An ISO 9001:2015 Certified Company</th> 
          </tr>
         </table>
         <div class = "footer_text">
          <p><span style =" font-weight:bold;">Registered & Corporate Office:-</span> MOBI PROTECT NEAR OLD ARPA BRIDGE PRATAP CHOWK, BILASPUR CHHATTISGARH </p>
          <p><span style =" font-weight:bold;">Corporate Identity No:-</span></p>
          </div>
       </div>  
  
          <div>
          <table class = "heading_logo">
              <tr>
              <td><img src="https://dbvertex.com/Electricalvehical/uplode/images/logo.jpg" style="height:60px; width:60px;" class="img-fluid"></td>
              <td class ="heading_text">MOBI PROTECT</td>
              <td></td>
              </tr>
          </table>
          </div> 
   
       <div class=""  style="margin-top:10%;">
            <table class="td_th" style="width:100%" >
              <tr style="">
                <th style="   text-align: left;" class="Conditions">Conditions</th>
                <th style="width:65%;  text-align: left; font-weight:200;" class="Conditions">
                1)Identification details such as Unique identification no, year of make, type, model etc. will be required while policy issuance WILL BE CHANGED TO 1 Identification details such as MAKE, MODEL,
                 IMEI, SERIAL NUMBER AND MODEL NUMBER WILL BE REQUIRED WHILE WHILE MOBILE PROTECTION PLAN ISSUANCE <br><br>
                2) Warranted that Loss of or damage caused by mechanical/electrical/electronic derangement/ breakdown is excluded.<br><br>
                3) Warranted that Partial Burglary or Theft of any parts of the MOBILE  is not covered.<br><br>
                4) FIR will be mandatory for settlement of Burglary & Theft claim.<br><br>
                5) Damage caused by any process of cleaning, dyeing or bleaching, restoring, repairing, retouching or 
                  renovation or deterioration arising from wear and tear, inherent vice, warping or shrinkage, moth, vermin, 
                  rodents, insects or mildew, natural ageing or any other gradually operating cause.<br><br>
                6) Consequential loss or legal liability of any kind is excluded.<br><br>
                7) Wear & Tear is excluded.<br><br>
                8) ACCIDENTS under influence of intoxicating liquor/drug<br>
              </th> 
              </tr>
            </table>
       </div>
          
       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>

        <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Exclusions</th>
            <th style="   text-align: left; padding-bottom:8px; font-weight:200;" class="td_th"></th> 
          </tr>
         </table>
       </div>  

       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>

        <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:30%; padding-bottom:8px; text-align: left;" class="Agency_Code">Basis of Valuation</th>
            <th style="   text-align: left; padding-bottom:8px; font-weight:200;" class="td_th">Reinstatement Value</th> 
          </tr>
         </table>
       </div>  

       <div class="empty_filed_2" style=" border-bottom: 2px solid black;"> 
        </div>
       
        <div class="empty_filed_2" style="border-bottom: 2px solid black;">
         <center style="text-align: center; font-weight:blod;"> Premium Details</center> 
        </div>
       
          
        
        <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:35%; padding-bottom:8px; text-align: left;" class="Agency_Code">Premium Description </th>
            <th style="   text-align: center; padding-bottom:8px; font-weight:200;" class="td_th">Amount (in Rs.)</th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:35%; padding-bottom:8px; text-align: left;" class="Agency_Code">Net Premium :</th>
            <th style="   text-align: right; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->ODAmount;}?></th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:35%; padding-bottom:8px; text-align: left;" class="Agency_Code">IGST : (18.00) </th>
            <th style="   text-align: right; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->GST;}?></th> 
          </tr>
         </table>
       </div>  

       <div class="">
         <table class="td_th" style="width:100%" >
          <tr style="padding-bottom:8px;">
            <th style="  width:35%; padding-bottom:8px; text-align: left;" class="Agency_Code">Total Gross Premium (Rounded Off): </th>
            <th style="   text-align: right; padding-bottom:8px; font-weight:200;" class="td_th"><?php {echo $report->premium;}?></th> 
          </tr>
         </table>
       </div>  

       <div class="sing">
        <table style="text-align: right; width:100%; margin-right:100px; margin-top:5px;"> 
        <tr>
          <th style="text-align: right; width:100%; margin-top:5px;">
         <p style ="font-size:10px; text-align: right;">MET ELECTRIC VEHICLE INSURANCE</p>
         </th>
         </tr>
         <tr>
          <td> <img src="https://dbvertex.com/Electricalvehical/uplode/images/sings.jpg" style="height:100px; width:100px;" class="img-fluid"></td>
           </tr>
          <tr>
          <td><p  style ="font-size:10px;">Authorised Signature<p></td>
        </tr>
      </table>
      </div>


</body>
</html>

