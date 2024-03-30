<?php
echo "echo does not require parentheses.";

// 字符串可以作为多个参数单独传递，
// 也可以连接在一起作为单个参数传递
echo 'This ', 'string ', 'was ', 'made ', 'with multiple parameters.', "\n";
echo 'This ' . 'string ' . 'was ' . 'made ' . 'with concatenation.' . "\n";

// 不会有新行或者空格；下面将会在一行中输出“helloworld”
echo "hello"; 
echo "world";
 
// 跟上面一样
echo "hello", "world";

echo "This string spans
multiple lines. The newlines will be
output as well";

echo "This string spans\nmultiple lines. The newlines will be\noutput as well.";

// 参数是可以产生字符串的任意表达式
$foo = "example";
echo "foo is $foo"; // foo is example

$fruits = ["lemon", "orange", "banana"];
echo implode(" and ", $fruits); // lemon and orange and banana

// 即使使用 declare(strict_types=1)，非字符串表达式也会强制转换字符串
echo 6 * 7; // 42

// 因为 echo 的表现跟表达式不同，所以下面的代码无效。
($some_var) ? echo 'true' : echo 'false';

// 但是，下面的示例又正常：
($some_var) ? print 'true' : print 'false'; // print 也是语言结构，
                                            // 但它是有效的表达式，返回 1，
                                            // 所以可以在此上下文中使用。

echo $some_var ? 'true': 'false'; // 首先运行表达式然后传递它到 echo
?>