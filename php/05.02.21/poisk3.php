<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="?" method="post">
        <textarea name="text" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="ок">
    </form>
    <?php
    $str = $_POST["text"];
    $rep = "/<img src='images/Smile.png'>/";
    $rep1 = "/<img src='images/Smiley.png'>/";
    $pattern = [
        "/:\)/iu",
        "/:\(/iu"
    ];
    $replacement = [
        "/<img src='images/Smile.png'>/",
        "/<img src='images/Smiley.png'>/"
    ];
    $pat = "/:\)/iu"; // "/ :-?\) /";
    $pat1 = "/:\(/iu";
    // $res = preg_replace($pat, $rep, $str);
    // $res2 = preg_replace($pat1, $rep1, $res);
    // echo $str . " $res";
    // echo $str . " $res2";
    $res3 = preg_replace($pattern, $replacement, $str);
    $res4 = preg_replace(
        [
            "/:\)/iu",
            "/:\(/iu"
        ],
        [
            "/<img src='images/Smile.png'>/",
            "/<img src='images/Smiley.png'>/"
        ],
        $str
    );
    $res5 = preg_replace(
        [
            "/:-?\)/iu",
            "/:-?\(/iu",
            "/:?\P/iu",
            "/:-?\/*/iu"
        ],
        [
            "/<img src='images/Smile.png'>/",
            "/<img src='images/Smiley.png'>/",
            "/<img src='images/Smiley3.png'>/",
            "/<img src='images/Smiley2.png'>/"
        ],
        $str
    );
    $res6 = preg_replace(
        [
            "/:-?\)/iu",
            "/:-?\(/iu",
            "/:?\P/iu",
            "/:-?\/*/iu"
        ],
        [
            "😀",
            "😞",
            "😛",
            "😬"
        ],
        $str
    );

    // echo $str . $res5;
    echo $str . $res6;
    ?>
</body>

</html>