<?php
// ตัวอย่างข้อมูล สามารถแทนที่ด้วยข้อมูลจริงจากฐานข้อมูล
$data = [
    ['id' => 1, 'username' => 'มุก', 'room' => 2000, 'electric' => 150, 'water' => 50],
    ['id' => 2, 'username' => 'บอล', 'room' => 2500, 'electric' => 200, 'water' => 60],
    ['id' => 3, 'username' => '', 'room' => 1800, 'electric' => 120, 'water' => 70],
];
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สรุปยอด</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="sm.css">
</head>
<body>
<div class="navbar">
    <!-- ลิงค์ไปยังหน้าเข้าสู่ระบบ และลงทะเบียน -->
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
    <table>
        <tr>
            <th>ลำดับ</th>
            <th>หมายเลขห้อง</th>
            <th>ชื่อผู้ใช้</th>
            <th>รายเดือน</th>
            <th>รายปี</th>
        </tr>
        <?php foreach ($data as $row): ?>
            <?php $total = $row['room'] + $row['electric'] + $row['water']; ?>
            <tr>
                <td><?= htmlspecialchars($row['id']) ?></td>
                <td><?= htmlspecialchars($row['username']) ?></td>
                <td><?= htmlspecialchars($row['room']) ?></td>
                <td><?= htmlspecialchars($row['electric']) ?></td>
                <td><?= htmlspecialchars($row['water']) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
