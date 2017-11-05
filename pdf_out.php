require_once('tcpdf.php'); 
//ʵ���� 
$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false); 
 
// �����ĵ���Ϣ 
$pdf->SetCreator('ͬѧ¼'); 
$pdf->SetAuthor('PmsTeam'); 
$pdf->SetTitle('��ҵͬѧ¼'); 
$pdf->SetSubject('TCPDF Tutorial'); 
$pdf->SetKeywords('TCPDF, PDF, PHP'); 
 
// ����ҳü��ҳ����Ϣ 
$pdf->SetHeaderData('logo.png', 30,  
      array(0,64,255), array(0,64,128)); 
$pdf->setFooterData(array(0,64,0), array(0,64,128)); 
 
// ����ҳü��ҳ������ 
$pdf->setHeaderFont(Array('stsongstdlight', '', '10')); 
$pdf->setFooterFont(Array('helvetica', '', '8')); 
 
// ����Ĭ�ϵȿ����� 
$pdf->SetDefaultMonospacedFont('courier'); 
 
// ���ü�� 
$pdf->SetMargins(15, 27, 15); 
$pdf->SetHeaderMargin(5); 
$pdf->SetFooterMargin(10); 
 
// ���÷�ҳ 
$pdf->SetAutoPageBreak(TRUE, 25); 
 
// set image scale factor 
$pdf->setImageScale(1.25); 
 
// set default font subsetting mode 
$pdf->setFontSubsetting(true); 
 
//�������� 
$pdf->SetFont('stsongstdlight', '', 14); 
 
$pdf->AddPage(); 
 
$str1 =  ' '; 
 
$pdf->Write(0,$str1,'', 0, 'L', true, 0, false, false, 0); 
 
//���PDF 
$pdf->Output('t.pdf', 'I'); 