<?php

// 1-10  = odd print only

// Odd number filter
// for($i=1; $i<=10; $i++){
//     if( ($i%2) != 0 ){
//         echo $i."<br>";
//     }
// }

// // Event Number filter
// for($i=1; $i<=10; $i++){
//     if( ($i%2) == 0 ){
//         echo $i."<br>";
//     }
// }


// odd even marker
for($i=1; $i<=10; $i++){
     if( ($i%2) == 0 ){
        echo $i."Even<br>";
    }
    else{
        echo $i."Odd<br>";
    }
}
