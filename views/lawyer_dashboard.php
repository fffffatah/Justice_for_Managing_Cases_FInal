<?php
    include 'lawyer_header.php';
    require_once '../controllers/lawyer_controller.php';
?>
<div style="padding-top:100px;">
<center>
    <table>
        <tr>
            <td align="center" style="padding:20px;">
            <div class="panel panel-warning" style="height:300px;width:250px">
                <div class="panel-heading">Running Cases</div>
                    <div class="panel-body">
                        <h1 align="center" style="color:orange; font-size:130px;">0</h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="panel panel-info" style="height:300px;width:250px">
                <div class="panel-heading">Closed Cases</div>
                    <div class="panel-body">
                        <h1 align="center" style="color:cyan; font-size:130px;">0</h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="panel panel-success" style="height:300px;width:250px">
                <div class="panel-heading">Cases Won</div>
                    <div class="panel-body">
                        <h1 align="center" style="color:green; font-size:130px;">0</h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="panel panel-danger" style="height:300px;width:250px">
                <div class="panel-heading">Cases Lost</div>
                    <div class="panel-body">
                        <h1 align="center" style="color:red; font-size:130px;">0</h1>
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