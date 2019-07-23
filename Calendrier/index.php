<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

class Calendar {
private $month;
private $year;
private $days_of_week;
private $num_days;
private $date_info;
private $day_of_week;

public function __construct($month, $year, $days_of_week = array('D', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa')){
$this->month = $month;
$this->year = $year;
$this->days_of_week = $days_of_week;
$this->num_days = cal_days_in_month(CAL_GREGORIAN, $this->month, $this->year);
$this->date_info = getdate(strtotime('first day of', mktime(0,0,0,$this->month,1,$this->year)));
$this->day_of_week = $this->date_info['wday'];

}

public function show(){
$output = '<table class="calendar">';
$output .= '<caption>'.$this->date_info['month'].' '.$this->year.'</caption>';
$output .= '<tr>';

foreach ( $this->days_of_week as $day) {
$output .= '<th class="header">' . $day . '</th>';
}

$output .= '</tr><tr>';

if( $this -> day_of_week >0 ){
$output .= '<td colspan="' . $this->day_of_week . '"></td>';
}

$current_day = 1;

while ($current_day <= $this->num_days){
if ($this->day_of_week == 7){
$this->day_of_week = 0;
$output .= '</tr><tr>';
}

$output .= '<td class="day">' .$current_day.'</td>';

$current_day++;
$this->day_of_week++;
}

if ($this-> day_of_week !=7){
$remaining_days = 7 - $this->day_of_week;
$output .='<td colspan="'.$remaining_days.'"></td>';
}

$output .='</tr>';
$output .='</table>';

echo $output;
}
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>Calendrier</title>

</head>

<body>
    <form action="index.php" method="post">
        <select name="month">
            <option>Mois
            <option value=1>Janvier
            <option value=2>Février
            <option value=3>Mars
            <option value=4>Avril
            <option value=5>Mai
            <option value=6>Juin
            <option value=7>Juillet
            <option value=8>Août
            <option value=9>Septembre
            <option value=10>Octobre
            <option value=11>Novembre
            <option value=12>Décembre
        </select>
        <select name="year">
            <option>Année
            <option value=2026>2026
            <option value=2025>2025
            <option value=2024>2024
            <option value=2023>2023
            <option value=2022>2022
            <option value=2021>2021
            <option value=2020>2020
            <option value=2019>2019
            <option value=2018>2018
            <option value=2017>2017
            <option value=2016>2016
            <option value=2015>2015
            <option value=2014>2014
            <option value=2013>2013
            <option value=2012>2012
            <option value=2011>2011
            <option value=2010>2010
            <option value=2009>2009
            <option value=2008>2008
            <option value=2007>2007
            <option value=2006>2006
        </select>
        <input type="submit" value="Valider" />
    </form>
    <?php
$month=(isset($_POST["month"]) ? $_POST["month"] : date("m",time()));
$year=(isset($_POST["year"]) ? $_POST["year"] : date('Y',time()));
$calendar= new calendar($month,$year);
$calendar->show();

?>
</body>

</html>

<!-- Made by David Wuilquot and Ariane Flamme -->