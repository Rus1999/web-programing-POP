<?php
    $text = "\t\nสวัสดีครับ...   ";
    // delete Whitespace
    echo "line 1: ".trim($text)."<br>\n";
    // delete Whitespace Tab Dot
    echo "line 2: ".trim($text, " \t.")."<br>\n";
    // delete character control (ascii 0-31)
    echo "line 3: ".trim($text, "\x00..\x1F")."<br>\n";
    $price = 550;
    $item = "books";
    echo "item $item price: $price baht.";
?>
