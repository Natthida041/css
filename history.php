<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายการย้อนหลัง</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="hi.css">
</head>
<body>
<div class="navbar">
    <a href="logout.php">ออกจากระบบ</a> <!-- เพิ่มลิงก์ออกจากระบบ -->
    
</div>
<div class="sidebar">
    <!-- เมนูหลัก -->
    <h2>เจ้าสัว Arpartment</h2>
    <a href="one.php">หน้าหลัก</a>
    <a href="index.php">คำนวน</a>
    <a href="print.php">พิมพ์เอกสาร</a>
    <a href="history.php">รายการย้อนหลัง</a>
    <a href="summary.php">สรุปยอด</a>
</div>

<div class="content">
    <h3>เลือกรายการค่าไฟและค่าน้ำ</h3>
    <select id="billingDropdown" onchange="showBillingInfo(this.value)">
        <option value="">เลือกรายการ...</option>
        <option value="1">มกราคม 2023 - ห้อง 101</option>
        <option value="2">กุมภาพันธ์ 2023 - ห้อง 101</option>
        <option value="3">มีนาคม 2023 - ห้อง 101</option>
    </select>
    <div id="billingInfo" class="billing-info">
        <!-- Billing information will be displayed here -->
    </div>
</div>

<script>
    function showBillingInfo(billingId) {
        var billingInfo = document.getElementById('billingInfo');
        switch(billingId) {
            case '1':
                billingInfo.innerHTML = '<p>รายการค่าไฟและค่าน้ำ : มกราคม 2023 - ห้อง 101</p>';
                break;
            case '2':
                billingInfo.innerHTML = '<p>รายการค่าไฟและค่าน้ำ : กุมภาพันธ์ 2023 - ห้อง 101</p>';
                break;
            case '3':
                billingInfo.innerHTML = '<p>รายการค่าไฟและค่าน้ำ : มีนาคม 2023 - ห้อง 101</p>';
                break;
            default:
                billingInfo.innerHTML = '<p>กรุณาเลือกรายการ</p>';
                break;
        }
    }
</script>

</body>
</html>
