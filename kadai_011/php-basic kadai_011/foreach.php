<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>11章課題</title>
</head>

<body>
    <p>
                <?php
        $personal_date = [
            'name' => '玉ねぎ',
            'price' => '200',
            'location' => '北海道'
        ];

        $key_mapping = [
            'name' => '名前',
            'price' => '値段',
            'location' => '産地'
        ];

        foreach ($personal_date as $key => $value) {
            echo "{$key_mapping[$key]}: {$value}. <br>";
        }
        ?>
    </p>
</body>
</html>