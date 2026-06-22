<?php
# ヒアドキュメントについて学習
$str = 'PHP(PHP:Hypertext Preprocessor)';
$msg = <<<EOD
{$str}は、サーバーサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎固めしましょう。<br />
"Let's start, everyone!!"
EOD;
print $msg;

# ナウドキュメントについて学習
$nowdoc = <<< 'EOD'
{$str}は、サーバーサイドで動作する簡易なスクリプト言語です。
まずは、本書でじっくり基礎固めしましょう。<br />
"Let's start, everyone!!"
EOD;
print $nowdoc;