<?php
chdir('../');
session_start();
require_once('db/config.php');
require_once('const/school.php');
require_once('const/check_session.php');
require_once('tcpdf/tcpdf.php');
require_once('const/calculations.php');

if ($res == "1" && $level == "1" && isset($_GET['term'])) {}else{header("location:../");}

$term = $_GET['term'];
$std = $_GET['std'];

try {
$conn = new PDO('mysql:host='.DBHost.';dbname='.DBName.';charset='.DBCharset.';collation='.DBCollation.';prefix='.DBPrefix.'', DBUser, DBPass);
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $conn->prepare("SELECT * FROM tbl_students WHERE id = ?");
$stmt->execute([$std]);
$result = $stmt->fetchAll();

foreach ($result as $key => $value) {
$fname = $value[1];
$mname = $value[2];
$lname = $value[3];
$gender = $value[4];
$img = $value[9];
}

$stmt = $conn->prepare("SELECT * FROM tbl_grade_system");
$stmt->execute();
$grading = $stmt->fetchAll();

$stmt = $conn->prepare("SELECT * FROM tbl_terms WHERE id = ?");
$stmt->execute([$term]);
$result = $stmt->fetchAll();

if (count($result) < 1) { header("location:./"); }

$title = $result[0][1].' Examination Report Card';

$stmt = $conn->prepare("SELECT * FROM tbl_exam_results
LEFT JOIN tbl_classes ON tbl_exam_results.class = tbl_classes.id
WHERE tbl_exam_results.term = ? AND tbl_exam_results.student = ?");
$stmt->execute([$term, $std]);
$result2 = $stmt->fetchAll();

if (count($result2) < 1) { header("location:./"); }

}catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}

$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor(WBName);
$pdf->SetTitle($title);
$pdf->SetSubject($title);
$pdf->SetKeywords('SRMS',WBName);

$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);

$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);


$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
require_once(dirname(__FILE__).'/lang/eng.php');
$pdf->setLanguageArray($l);
}

$pdf->setFontSubsetting(true);
$pdf->SetFont('helvetica', '', 14, '', true);

$pdf->AddPage();
$pdf->setTextShadow(array('enabled'=>true, 'depth_w'=>0.2, 'depth_h'=>0.2, 'color'=>array(196,196,196), 'opacity'=>1, 'blend_mode'=>'Normal'));
if ($img == "DEFAULT") {
$th_img = '<img  width="90" height="90"  src="images/students/'.$gender.'.png">';
}else{
$th_img = '<img width="90" height="90" src="images/students/'.$img.'">';
}

$html = '<table width="100%">
<tr>
<td width="15%"><img src="images/logo/'.WBLogo.'"></td>
<td width="70%" style="text-align:center;">
<h5><b style="font-size:18px;">'.WBName.'</b>
<br>Student Examination Report Card<br>
'.$result[0][1].'<br>
'.$result2[0][7].'</h5>
</td>
<td width="15%">'.$th_img.'</td>
</tr>
</table>';

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->cell(0, 0, '', 0, 1, 'C');
$html = '<b style="font-size:10pt;">Student Profile</b>';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$html = '<table  cellpadding="3" style="margin-bottom:10px;  font-size: 10px; border-collapse: collapse;" width="100%">
<tr>
<td width="20%"><b>REGISTRATION NUMBER</b></td>
<td width="80%">'.$std.'</td>
</tr>
<tr>
<td><b>STUDENT NAME</b></td>
<td colspan="5">'.$fname.' '.$mname.' '.$lname.'</td>
</tr>
<tr>
<td><b>EXAMINATION TERM</b></td>
<td colspan="5">'.$result[0][1].'</td>
</tr>
<tr>
<td><b>EXAMINATION CLASS</b></td>
<td colspan="5">'.$result2[0][7].'</td>
</tr>
</table>';

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->cell(0, 0, '', 0, 1, 'C');

$html = '<b style="font-size:10pt;">Examination Results</b>';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$htmls = '<table cellpadding="3" border="1" style="margin-bottom:10px;  font-size: 10px; border-collapse: collapse;" width="100%" >
<tr>
<th width="5%"><b>#</b></th>
<th width="35%"><b>SUBJECT</b></th>
<th width="20%"><b>SCORE</b></th>
<th width="20%"><b>GRADE</b></th>
<th width="20%"><b>REMARK</b></th>
</tr>';

$stmt = $conn->prepare("SELECT * FROM tbl_subject_combinations LEFT JOIN tbl_subjects ON tbl_subject_combinations.subject = tbl_subjects.id");
$stmt->execute();
$result = $stmt->fetchAll();
$n = 1;
$tscore = 0;
$t_subjects = 0;
$subssss = array();

foreach ($result as $key => $row) {
$class_list = unserialize($row[1]);

if (in_array($result2[0][6], $class_list))
{
$t_subjects++;
$score = 0;
$grd = "N/A";
$rm = "N/A";

$stmt = $conn->prepare("SELECT * FROM tbl_exam_results WHERE class = ? AND subject_combination = ? AND term = ? AND student = ?");
$stmt->execute([$result2[0][6], $row[0], $term, $std]);
$ex_result = $stmt->fetchAll();

if (!empty($ex_result[0][5])) {
$score = $ex_result[0][5];
}
array_push($subssss, $score);

$tscore = $tscore + $score;
foreach($grading as $grade)
{

if ($score >= $grade[2] && $score <= $grade[3]) {

$grd = $grade[1];
$rm = $grade[4];

}

}

$htmls = $htmls.'
<tr>
<td width="5%">'.$n.'</td>
<td width="35%" >'.$row[6].'</td>
<td width="20%" align="center">'.$score.'%</td>
<td width="20%" align="center">'.$grd.'</td>
<td width="20%" align="center">'.$rm.'</td>
</tr>
';
?>

<?php
}

$n++;
}

$htmls = $htmls.'</table>';

$pdf->writeHTMLCell(0, 0, '', '', $htmls, 0, 1, 0, true, '', true);

if ($t_subjects == "0") {
$av = '0';
}else{
$av = round($tscore/$t_subjects);
}
foreach($grading as $grade)
{

if ($av >= $grade[2] && $av <= $grade[3]) {

$grd_ = $grade[1];
$rm_ = $grade[4];

}

}



$html = '<table border="1" cellpadding="3" style="margin-bottom:10px;  font-size: 10px; border-collapse: collapse;" width="100%">
<tr>
<td ><b>TOTAL SCORE</b></td>
<td><b>AVERAGE</b></td>
<td><b>GRADE</b></td>
<td><b>REMARK</b></td>
<td><b>DIVISION</b></td>
<td><b>POINTS</b></td>
</tr>
<tr>
<td align="center">'.$tscore.'</td>
<td align="center">'.$av.'</td>
<td align="center">'.$grd_.'</td>
<td align="center">'.$rm_.'</td>
<td align="center">'.get_division($subssss).'</td>
<td align="center">'.get_points($subssss).'</td>
</tr>
</table>';

$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

$pdf->cell(0, 0, '', 0, 2, 'C');
$html = '<b style="font-size:10pt;">Grading System</b>';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
$html = '<table border="1" cellpadding="3" style="margin-bottom:10px;  font-size: 10px; border-collapse: collapse;" width="100%">';

$html = $html.'<tr>';
foreach ($grading as $key => $value) {
$html = $html.'
<td align="center">'.$value[1].'</td>
';
}
$html = $html.'</tr>';

$html = $html.'<tr>';
foreach ($grading as $key => $value) {
$html = $html.'
<td align="center">'.$value[2].'% - '.$value[3].'%</td>
';
}
$html = $html.'</tr>';

$html = $html.'<tr>';
foreach ($grading as $key => $value) {
$html = $html.'
<td align="center">'.$value[4].'</td>
';
}
$html = $html.'</tr>';

$html = $html.'</table>';
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);

ob_end_clean();

$pdf->Output($title.'.pdf', 'I');
?>
