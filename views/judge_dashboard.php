<?php
    include 'judge_header.php';
    require_once '../controllers/judge_case_controller.php';
    $runningCases=0;
    $closedCases=0;
    $cases=getCasesForjudge($_COOKIE["id"]);
    if(count($cases)>0){
        foreach($cases as $case){
            if(strcmp($case["case_status"], "running")==0){
                $runningCases++;
            }
            elseif(strcmp($case["case_status"], "closed")==0){
                $closedCases++;
            }
        }
    }
?>

<div style="padding-top:100px;">
<center>
    <table>
        <tr>
            <td align="center" style="padding:20px;">
            <div class="card border-success mb-3" style="height:300px;width:250px">
                <div class="card-header text-success">Running Cases</div>
                    <div class="card-body">
                        <h1 align="center" style="color:green; font-size:130px;"><?php echo $runningCases;?></h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="card border-danger mb-3" style="height:300px;width:250px">
                <div class="card-header text-danger">Closed Cases</div>
                    <div class="card-body ">
                        <h1 align="center" style="color:red; font-size:130px;"><?php echo $closedCases;?></h1>
                    </div>
                </div>
            </td>
        </tr>
    </table>
</center>
</div>

<?php
    include 'lawyer_footer.php';
?>
