<?php
    require_once '../models/db_conn.php';
    require_once '../models/generate_pdf.php';
    require_once 'case_controller.php';
    require_once 'common_controller.php';
    require_once 'payment_controller.php';
    $monthly="";
    $weekly="";
    $transactions="";
    $date_generated="";
    $generator_id="";
    if(isset($_POST["generate_report_button"])){
        $monthly=generateMonthly();
        $weekly=generateWeekly();
        $transactions=generateTransactions();
        $date_generated=date("d/m/Y");
        $generator_id=$_COOKIE["id"];
        addReports($monthly, $weekly, $transactions, $date_generated, $generator_id);
    }

    function addReports($monthly, $weekly, $transactions, $date_generated, $generator_id){
        $query="INSERT INTO reports(monthly, weekly, transactions, date_generated, generator_id) VALUES ('$monthly', '$weekly', '$transactions', '$date_generated', $generator_id)";
        doNoQuery($query);
    }
    function getReports($generator_id){
        $query="SELECT * FROM reports WHERE generator_id=$generator_id";
        return doQuery($query);
    }
    function generateMonthly(){
        $my_profile=getUserById($_COOKIE["id"]);
        $current_date=strtotime(date("d/m/Y"));
        $one_month_before=strtotime(date('d/m/Y', strtotime('-1 month', $current_date)));
        $runningCases=0;
        $closedCases=0;
        $casesWon=0;
        $casesLost=0;
        $cases=getCasesForLaywer($_COOKIE["id"]);
        if(count($cases)>0){
            foreach($cases as $case){
                if(strcmp($case["case_status"], "Running")==0 && ((strtotime($case["date_added"])>=$one_month_before) && ($one_month_before<=strtotime($case["date_added"])))){
                    $runningCases++;
                }
                elseif(strcmp($case["case_status"], "Closed")==0 && ((strtotime($case["date_added"])>=$one_month_before) && ($one_month_before<=strtotime($case["date_added"])))){
                    $closedCases++;
                }
                elseif(strcmp($case["case_status"], "Won")==0 && ((strtotime($case["date_added"])>=$one_month_before) && ($one_month_before<=strtotime($case["date_added"])))){
                    $casesWon++;
                }
                elseif(strcmp($case["case_status"], "Lost")==0 && ((strtotime($case["date_added"])>=$one_month_before) && ($one_month_before<=strtotime($case["date_added"])))){
                    $casesLost++;
                }
            }
        }
        $html_report="<html><head><center><h3>Report - Monthly</h3></center><h4>Laywer Name: ".$my_profile[0]["fullname"]."</h4></head><body><h2>Cases Won: ".$casesWon."</h2><h2>Cases Lost: ".$casesLost."</h2><h2>Closed Cases: ".$closedCases."</h2><h2>Running Cases: ".$runningCases."</h2></body></html>";
        return getPdf($html_report, "../storage/docs/", $_COOKIE["id"], "MONTHLY_REPORT");
    }
    function generateWeekly(){
        $my_profile=getUserById($_COOKIE["id"]);
        $current_date=strtotime(date("d/m/Y"));
        $one_week_before=$current_date-18316800;
        $runningCases=0;
        $closedCases=0;
        $casesWon=0;
        $casesLost=0;
        $cases=getCasesForLaywer($_COOKIE["id"]);
        if(count($cases)>0){
            foreach($cases as $case){
                if(strcmp($case["case_status"], "Running")==0 && ((strtotime($case["date_added"])>=$one_week_before) && ($one_week_before<=strtotime($case["date_added"])))){
                    $runningCases++;
                }
                elseif(strcmp($case["case_status"], "Closed")==0 && ((strtotime($case["date_added"])>=$one_week_before) && ($one_week_before<=strtotime($case["date_added"])))){
                    $closedCases++;
                }
                elseif(strcmp($case["case_status"], "Won")==0 && ((strtotime($case["date_added"])>=$one_week_before) && ($one_week_before<=strtotime($case["date_added"])))){
                    $casesWon++;
                }
                elseif(strcmp($case["case_status"], "Lost")==0 && ((strtotime($case["date_added"])>=$one_week_before) && ($one_week_before<=strtotime($case["date_added"])))){
                    $casesLost++;
                }
            }
        }
        $html_report="<html><head><center><h3>Report - Weekly</h3></center><h4>Laywer Name: ".$my_profile[0]["fullname"]."</h4></head><body><h2>Cases Won: ".$casesWon."</h2><h2>Cases Lost: ".$casesLost."</h2><h2>Closed Cases: ".$closedCases."</h2><h2>Running Cases: ".$runningCases."</h2></body></html>";
        return getPdf($html_report, "../storage/docs/", $_COOKIE["id"], "WEEKLY_REPORT");
    }
    function generateTransactions(){
        $my_profile=getUserById($_COOKIE["id"]);
        $my_payments=getPaymentsForReceiver($_COOKIE["id"]);
        $html_builder="<html><head><center><h3>Report - Transactions</h3></center><h4>Laywer Name: ".$my_profile[0]["fullname"]."</h4></head><body><table border=\"2\"><tr><th>Due</th><th>Paid</th><th>Balance</th><th>Due Date</th><th>Payment Date</th><th>Payer ID</th></tr>";
        foreach($my_payments as $my_payment){
            $html_builder.="<tr>";
            $html_builder.="<td>".$my_payment["due"]."</td>";
            $html_builder.="<td>".$my_payment["paid"]."</td>";
            $html_builder.="<td>".$my_payment["balance"]."</td>";
            $html_builder.="<td>".$my_payment["due_date"]."</td>";
            $html_builder.="<td>".$my_payment["payment_date"]."</td>";
            $html_builder.="<td>".$my_payment["payer_id"]."</td>";
            $html_builder.="</tr>";
        }
        $html_builder.="</table></body></html>";
        return getPdf($html_builder, "../storage/docs/", $_COOKIE["id"], "TRANSACTIONS_REPORT");
    }
?>