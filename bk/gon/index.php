<html>

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Member Details</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background-color: #FAF6E9;
      color: #333;
      padding: 20px;
      padding-top: 50px;
    }

    .header {
      margin-bottom: 30px;
      padding: 0px 20px;
    }

    .text-header {
      font-size: 11px;
      line-height: 1.545em;
    }

    .text-body {
      font-family: "Bai Jamjuree", sans-serif;
      font-weight: 700;
      font-size: 14px;
      line-height: 1.745em;
    }

    .text-body-point {
      font-family: "Bai Jamjuree", sans-serif;
      font-weight: 400;
      font-size: 14px;
      line-height: 1.745em;
    }

    .text-point {
      font-family: Prompt, sans-serif;
      font-weight: 600;
      font-size: 36px;
      line-height: 54px;
      margin-bottom: -3px;
    }

    .text-color {
      color: rgb(51, 51, 51);
    }
  </style>
</head>

<body>
  <div>

    <div class="header">
      <img src="qr.png" alt="qrcode-member-id" style="display:block;margin:0px auto 20px">
    </div>
    <div style="margin-bottom: 30px;display: flex;flex-wrap: wrap;" class="text-color">
      <div style="width: 50%;">
        <div class="text-header">ชื่อสมาชิก</div>
        <div class="text-body">พชร นพพรพงศา</div>
      </div>
      <div style="width: 50%;">
        <div class="text-header">เลขสมาชิก</div>
        <div class="text-body">313004472692</div>
      </div>
    </div>
    <div style="margin-bottom: 30px;display: flex;flex-wrap: wrap;" class="text-color">
      <div style="width: 50%;">
        <div class="text-header">คะแนนสะสมทั้งหมด</div>
        <div class="text-point">464</div>
      </div>
      <div style="width: 50%;">
        <div class="text-header">คะแนนที่จะหมดอายุ</div>
        <div class="text-body-point"><strong>124 คะแนน</strong> - 31/12/24</div>
        <div class="text-body-point"><strong>340 คะแนน</strong> - 31/12/25</div>
      </div>
    </div>
  </div>
</body>

</html>