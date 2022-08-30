<?php

function areBracketsBalanced($expr){
    $stack = [];
    $exper = strlen($expr);
    $stacks = count(strlen($stack));

    for ($i=0; $i < $expr; $i++) { 
        $x =  $expr[i];
        if ($x == '(' || $x =='[' || $x == '{') {
            $stack_push($x);
            continue;
        }
        if ($stack_length == 0) 
            return false;
        
            $check;
            switch ($x){
            case ')':
                $check = $stack_pop();
                if ($check == '{' || $check == '[')
                    return false;
                break;
     
            case '}':
                $check = $stack_pop();
                if ($check == '(' || $check == '[')
                    return false;
                break;
     
            case ']':
                $check = $stack_pop();
                if ($check == '(' || $check == '{')
                    return false;
                break;
        }
    }
    return ($stacks == 0);
}

$expr = "([{})";

if (areBracketsBalanced($expr)) {
    echo "YES";
} else {
    echo "NO";
}

// SOAL 2

// // PHP program to reverse
// // a string using recursion
 
// // Function to print reverse
// // of the passed string
// function reverse($str)
// {
//     if (($str == null) ||
//         (strlen($str) <= 1))
//     echo ($str);
 
//     else
//     {
//         echo ($str[strlen($str) - 1]);
//         reverse(substr($str, 0,
//                (strlen($str) - 1)));
//     }
// }
 
// // Driver Code
// $str = "Hello World";
// reverse($str);
 
// // This code is contributed by
// // Manish Shaw(manishshaw1)

// BATAS
// $string = ['h','e','l','l','o'];
// $reverse = '';
// $i = 0;
// while(!empty($string[$i])){ 
//       $reverse = $string[$i].$reverse; 
//       $i++;
// }
// echo $reverse;


// SOAL 1

// function maxConsecutive1($nums) {
//         $count = 0;
//         $consecutive = 0;
        
//             foreach($nums as $num){
//                 if($num == 1){
//                     $count += 1;
//                     $consecutive = max($count,$consecutive);
//                 } else {
//                     $count = 0;
//                 }
//             }
//         return $consecutive;
//     }
//     echo(maxConsecutive1([1,1,0,0,1,1,1]));
//     echo("<br>");
//     echo(maxConsecutive1([1,0,0,1,0,1,1]));
?>
<!-- var findMaxConsecutiveOnes = function(nums) {
    let largestCount = 0;
    let currentCount = 0;
    for (let i = 0; i<nums.length; i++) {
        if (nums[i] === 0) {
            currentCount = 0;
        } else {
            currentCount++;
        };
        if (currentCount > largestCount) largestCount = currentCount;
    };
    return largestCount;
    
}; -->