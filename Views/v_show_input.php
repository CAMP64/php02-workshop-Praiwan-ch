<!DOCTYPE html>
<html>

<head>
    <title>63160256 แบบสอบถามนิสิต</title>
</head>

<body>
    <h1>แบบสอบถามข้อมูลนิสิตสาขา SE</h1>
    <hr>
    <h3>1.ข้อมูลส่วนตัว</h3>
    <form method="POST" action="<?php echo site_url().'/Student/show_value'; ?>" enctype="multipart/form-data">
        คำนำหน้า <select name="name_title">
            <option value="นาย">นาย</option>
            <option value="นาง"> นาง</option>
            <option value="นางสาว">นางสาว</option>
        </select required>
        รหัสนิสิต <input type="number" name="id"> <br> <br>
        ชื่อ :
        <input type="text" name="Fname" size="15" maxlength="30" required>
        นามสกุล :
        <input type="text" name="Lname" size="15" maxlength="30" required> <br> <br>
        วันเกิด :
        <input type="date" name="date" required>
        อีเมล :
        <input type="email" name="email" required> <br> <br>
        <hr>

        <h3>2.ข้อมูลการเรียน</h3>
        นิสิตชั้นปีที่
        <input type="Radio" name="year" value="1" required> 1
        <input type="Radio" name="year" value="2" required> 2
        <input type="Radio" name="year" value="3" required> 3
        <input type="Radio" name="year" value="4" required> 4 <br> <br>
        มกุล <select name="cluster">
            <option value="0">Cluster 0</option>
            <option value="1">Cluster 1</option>
            <option value="2">Cluster 2</option>
            <option value="3">Cluster 3</option>
            <option value="4">Cluster 4</option>
            <option value="5">Cluster 5</option>
            <option value="6">Cluster 6</option>
            <option value="7">Cluster 7</option>
            <option value="8">Cluster 8</option>
            <option value="9">Cluster 9</option>
        </select required> <br> <br>
        ภาษาที่ถนัด <br>
        <input type="checkbox" name="code[]" value="HTML"> HTML <br>
        <input type="checkbox" name="code[]" value="CSS"> CSS <br>
        <input type="checkbox" name="code[]" value="MySQL"> MySQL <br>
        <input type="checkbox" name="code[]" value="JS"> JS <br>
        <input type="checkbox" name="code[]" value="PHP"> PHP <br> <br>
        <hr>

        <h3>3.รูปภาพและไฟล์</h3>
        รูปภาพ <input type="file" name ="image" accept = "image/*"> <br>
        ไฟล์ <input type="file" name ="pdf" accept = ".pdf"> <br><br>
        <input type="reset" value="ยกเลิก ">
        <input type="submit" value="บันทึก">
    </form>
</body>

</html>