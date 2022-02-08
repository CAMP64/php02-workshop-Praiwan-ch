<!DOCTYPE html>
<html>

<head>
    <title>63160256 รายละเอียดข้อมูลนิสิต</title>
</head>

<body>
    <img src="<?php echo base_url().'/picture/logoBuu.png'; ?>" width="90">
    <font size="100"><b>รายละเอียดข้อมูลนิสิต</b></font> <br>
    <hr>
    <h3>1.ข้อมูลส่วนตัว</h3>
    รหัสนิสิต : <?php echo $id ?> <br>
    คำนำหน้า : <?php echo $name_title ?> <br>
    ชื่อ : <?php echo $Fname ?> นามสกุล : <?php echo $Lname?> <br>
    วันเกิด : <?php echo $date ?> <br>
    อีเมล : <?php echo $email ?> <br>
    <hr>
    <h3>2.ข้อมูลส่วนตัว</h3>
    นิสิตชั้นปีที่ : <?php echo $year ?> <br>
    มกุล : <?php echo $cluster ?> <br>
    ภาษาที่ถนัด : <br>
    <?php 
    $i=1;
    foreach ($code as $index =>$value){
        echo $i.'. ';
        echo $value.'<br>';
        $i++;
    }?>
    <br>
    <hr>
    <h3>3.ข้อมูลรูปภาพ</h3>
    <img src="<?php echo base_url().'./picture/'.$image; ?>" width="100"> <br>
    <iframe src="<?php echo base_url().'./file/'.$pdf; ?>" style="width: 100%;height: 500px;border: none;"></iframe>
    </form>
</body>

</html>