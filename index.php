<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>หน้าหลัก</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="w.css">
    <link rel="stylesheet" href="in.css">
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
    <?php if (isset($_SESSION['success'])): ?>
        <div class="success">
            <h3>
                <?php
                    echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['username'])): ?>
        <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
        <p><a href="index.php?logout=1" style="color: red;">Logout</a></p>
    <?php endif; ?>
</div>

<div class="container">
    <h1>Electricity and Water Calculation</h1>
    <form action="calculate.php" method="GET">
        <label for="year">Year:</label>
        <input type="text" name="year" id="year" value="<?php echo date('Y'); ?>">
        <label for="month">Month:</label>
        <input type="text" name="month" id="month" value="<?php echo date('m'); ?>">
        <button type="submit">Calculate</button>
    </form>

    <div class="result">
        <h2>Calculation Result</h2>
        <?php include('calculate.php'); ?>
    </div>
</div>

</body>
</html>
