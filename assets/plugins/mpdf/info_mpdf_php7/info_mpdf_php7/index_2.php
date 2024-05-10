<?php
	require_once __DIR__ . '/vendor/autoload.php';
	 include('condb.php');

$defaultConfig = (new Mpdf\Config\ConfigVariables())->getDefaults();
$fontDirs = $defaultConfig['fontDir'];

$defaultFontConfig = (new Mpdf\Config\FontVariables())->getDefaults();
$fontData = $defaultFontConfig['fontdata'];	
$mpdf = new \Mpdf\Mpdf([
            'mode' => 'utf-8', 
            'format' => 'A4',
            'margin_left' => 15,
            'margin_right' => 15,
            'margin_top' => 16,
            'margin_bottom' => 16,
            'margin_header' => 9,
            'margin_footer' => 9,
            'mirrorMargins' => true,


            //configfont
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . 'vendor/mpdf/mpdf/custom/font/directory',
            ]),
            'fontdata' => $fontData + [
                'thsarabun' => [
                    'R' => 'THSarabunNew.ttf',
                    'I' => 'THSarabunNew Italic.ttf',
                    'B' => 'THSarabunNew Bold.ttf',
                    'U' => 'THSarabunNew BoldItalic.ttf'
                ]
            ],
            'default_font' => 'thsarabun',
            'defaultPageNumStyle' => 1
            // close configfont



        ]);

$mpdf->setFooter('{PAGENO}');//ตัวรันหน้า
//http://fordev22.com/
	




$body_1='
	<style>
		body{

			
			  font-family: "thsarabun"; 


			  /* http://fordev22.com */
       		/* https://www.facebook.com/fordev22/ */

			
		}
	</style>';
$fordev22 ='
<style>
     

div{
       
    }
table {
  
   
  border-collapse: collapse;
  width: 100%;
}

td, th {
    font-size: 18px;
  border: 1px solid #AED6F1;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #AED6F1;
}

</style>


<img width="250"  src="logo_fordev22_2.png" style="vertical-align: middle;
  width: 250px;">
<h1>Php mPdf (Print Pdf For Php v.5 - v.7 ++) By fordev22.com</h1>
<div class="alert alert-info">
    <strong> mPdf</strong>
    ภาษา ไทย และ Eng</div>
<p></p>
<div class="table-responsive">
<table>
    <thead>
    <tr>
        <th><b>Website</b> </th>
        <th>Name</th>
        <th>Address</th>
    </tr>
    </thead>
    <tbody>
    
    <tr>
        <td>fordev22.com</td>
        <td>Mr.fordev22</td>
        <td>ไทย
        </td>
    </tr>

    <tr>
        <td>fordev22.com</td>
        <td>Mr.fordev22</td>
        <td>Japan
        </td>
    </tr>

   

    
    </tbody>


   
</table>
</div>

';
	


	

$mpdf->WriteHTML($fordev22);
  

$mpdf->WriteHTML($body_1);
$output = 'fordev22.com';
$mpdf->Output($output, 'I');
/* http://fordev22.com */
/* https://www.facebook.com/fordev22/ */
//https://monkeywebstudio.com/%E0%B8%AA%E0%B8%A3%E0%B9%89%E0%B8%B2%E0%B8%87%E0%B9%84%E0%B8%9F%E0%B8%A5%E0%B9%8C-pdf-%E0%B8%94%E0%B9%89%E0%B8%A7%E0%B8%A2-mpdf/
?>