<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $schools = array(
            'studens' => array(
                'SV01' => array(
                    'name' => 'Phan văn Cương',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'SV02' => array(
                    'name' => 'Phan văn Dũng',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'SV03' => array(
                    'name' => 'Phan văn Đức',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'SV04' => array(
                    'name' => 'Phan văn Hiền',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
            ),
            'teacher' => array(
                'GV01' => array(
                    'name' => 'Phan văn Cương',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'GV02' => array(
                    'name' => 'Phan văn Dũng',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'GV03' => array(
                    'name' => 'Phan văn Đức',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
                'GV04' => array(
                    'name' => 'Phan văn Hiền',
                    'birth' => '10/11/1998',
                    'gender' => 'Nam'
                ),
            )
        );
    ?>
    <div id="content">
        <?php
            foreach($schools as $k => $v) {
                ?>
               <h1 class="list_title"><?php echo $k; ?></h1>
               <ul class="list_schools">
                <?php foreach ($v as $k1 => $v1) {
                    ?>
                    <li>
                        <p><span>MaSV:</span><?php echo $k1; ?></p>
                        <p><span>Ten:</span><?php echo $v1['name']?></p>
                        <p><span>Ngay sinh:</span><?php echo $v1['birth']?></p>
                        <p><span>Gioi tinh:</span><?php echo $v1['gender']?></p>
                    </li>
                <?php }
                ?>
               </ul>
               <?php 
            }
        ?>
    </div>
</body>
</html>