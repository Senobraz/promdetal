<?
$arUrlRewrite = array(
    array(
        "CONDITION" => "#^/news/([0-9a-zA-Z\\-]+)(\\\\?(.*))#",
        "RULE" => "ELEMENT_ID=\$1&\$2",
        "ID" => "",
        "PATH" => "/news/detail.php",
    )
);
?>