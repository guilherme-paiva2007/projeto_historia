<?php
function anchor($text = "", $anchor = "#", $anchor_type = "default", $target = "", $id = "", $class = "") {
    $id_attribute = "";
    $class_attribute = "";
    $target_attribute = "";

    global $root_folder;
    $anchor_default = $root_folder;

    if ($anchor_type == "default") $anchor_type = $anchor_default;
    if ($anchor_type == "only_link") {
        $anchor_type = $anchor_default;
        echo "$anchor_type$anchor";
        return;
    }

    if ($target !== "") $target_attribute = "target='$target'";
    if ($class !== "") $class_attribute = "class='$class'";
    if ($id !== "") $id_attribute = "class='$id'";

    echo "<a href='$anchor_type$anchor' $id_attribute $class_attribute $target_attribute>$text</a>";
}

function includeJSON($jsvarname, $link) {
    echo "<script> var $jsvarname = `";
    include $link;
    echo " `</script>";
}