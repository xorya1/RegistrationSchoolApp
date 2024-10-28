<?php
require_once __DIR__ . '/vendor/autoload.php';

//create variables
$html = utf8_encode($html);



$fname=$_POST['fname'];
$nClass=$_POST['nClass'];
$moi=$_POST['Moi'];
$mont=$_POST['Mont'];
$total=$_POST['total'];
$mode=$_POST['mode'];
$anne=$_POST['anne'];
$nrecu=$_POST['nrecu'];





//create pdf

$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => [200, 100]]);
$mpdf->autoScriptToLang = true;
$mpdf->autoLangToFont = true;
//initializing empty variables to fill in with html code.
$mpdf->SetHTMLHeader('<pre>Groupe Scolaire <br> Zayane Privé                                                    مؤسسة زيان</pre>');
$data.='<br/>';
$data.='<br/>';
$data.='<br>';
$data.='<br>';
$data.='<br>';
$data='
<div style="overflow-x:auto; overflow-y:auto;">
<style type="text/css">
.tg  {border-collapse:collapse;border-spacing:0;}
.tg td{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  overflow:hidden;padding:10px 10px;word-break:normal;}
.tg th{border-color:black;border-style:solid;border-width:1px;font-family:Arial, sans-serif;font-size:14px;
  font-weight:normal;overflow:hidden;padding:10px 10px;word-break:normal;}
.tg .tg-0lax{text-align:center;vertical-align:top}
.tg .tg-1lax{text-align:right;}
.tg .tg-2lax{text-align:left;}
</style>
<p style="text-align:center;font-family:monospace;">Reçu N° '.$nrecu.' ايصال رقم </p>
<table class="tg" style="undefined;table-layout: fixed; width: 718px;margin-top:20px">
<colgroup>
<col style="width: 95px">
<col style="width: 135px">
<col style="width: 197px">
<col style="width: 106px">
<col style="width: 185px">
</colgroup>
<thead>
  <tr style="height:50px">
    <th class="tg-0lax">'.$anne.' السنة الدراسية</th>
    <th class="tg-0lax">'.$nClass.'القسم</th>
    <th class="tg-0lax" colspan="3">'.$fname.' (التلميذ(ة</th>
  </tr>
</thead>
<tbody>
  <tr>
    <td class="tg-0lax" rowspan="4">خنيفرة في <br> khénifra le <br> <br> '.date("Y/m/d").' <br><br> الإدارة<br> Administration</td>
    <td class="tg-2lax">Frais</td>
    <td class="tg-0lax">Mois شهر-أشهر </td>
    <td class="tg-0lax">Montant مبلغ</td>
    <td class="tg-1lax">واجبات</td>
  </tr>
  <tr style="height:80px">
    <td class="tg-2lax">Scolarité</td>
    <td class="tg-0lax">'.$moi.'</td>
    <td class="tg-0lax">'.$mont.'</td>
    <td class="tg-1lax">التمدرس</td>
  </tr>
  <tr>
    <td class="tg-2lax">Total</td>
    <td class="tg-0lax" colspan="2">'.$mont.'</td>
    <td class="tg-1lax">المجموع</td>
  </tr>
  <tr style="height:30px">
    <td class="tg-2lax">Mode de paiment</td>
    <td class="tg-0lax" colspan="2">'.$mode.'</td>
    <td class="tg-1lax">الأداء</td>
  </tr>
</tbody>
</table>
</div>';
//set footer
$mpdf->SetHTMLFooter('<p style="color:blue;font-size:10px;text-align:center">N° 2, Avenue Mohamed V - Khenifra ,Tel:+212668200884</p>
 ');






//write to 1st pdf
$mpdf->WriteHTML($data);
//output all the pages to browser
$mpdf->Output("Reçu inscription de ".$fname.".pdf",'D');
?>


