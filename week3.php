<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>資管系烤表單</title>
    </head>
    <body>
        <form method="post" action="week3_result.php">
        <center>
        <img src="bbq.png" width="300">
        <h3><b>請問有意願參加本學期的資管系烤嗎</b></h3>
        <h4>
        時間:2023/3/22
        <br/>
        地點:高雄大學宿舍烤肉區
        <br/>
        <br/>
        <b>是</b> <input type="radio" name="decide" value="yes"> 
        <b>否</b> <input type="radio" name="decide" value="no">
        <br/>
        <b>是的話請填寫以下資料</b>
        <br/>
        <input type="name" placeholder="請輸入姓名" name="fname">
        <br/>
        <input type="text" placeholder="請輸入學號" name="studentid">
        </h4>
        <hr/>
        <h4><b>費用</b></h4>
        <table border="3">
            <tr>
                <td>有繳系費</td>
                <td>未繳系費</td>
            </tr>
            <tr>
                <td>100</td>
                <td>150</td>
            </tr>
        </table>
        <br/>
        <input type="submit"><imput type="reset">
        </center>
        <form>
    </body>
</html>