<?php
    include 'lawyer_header.php';
    require_once '../controllers/lawyer_controller.php';
?>

<div style="padding-top:100px;">
<center>
    <table>
        <tr>
            <td align="center" style="padding:20px;">
            <div class="card border-warning mb3" style="height:300px;width:250px">
                <div class="card-header">Running Cases</div>
                    <div class="card-body">
                        <h1 align="center" style="color:orange; font-size:130px;">0</h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="card border-info mb3" style="height:300px;width:250px">
                <div class="card-header">Closed Cases</div>
                    <div class="card-body">
                        <h1 align="center" style="color:cyan; font-size:130px;">0</h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="card border-success mb3" style="height:300px;width:250px">
                <div class="card-header">Cases Won</div>
                    <div class="card-body">
                        <h1 align="center" style="color:green; font-size:130px;">0</h1>
                    </div>
                </div>
            </td>
            <td align="center" style="padding:20px;">
            <div class="card border-danger mb3" style="height:300px;width:250px">
                <div class="card-header">Cases Lost</div>
                    <div class="card-body">
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