<?php


function countDown(int $top)
{
    while($top > 0) {
        print $top . '..';
        $top--;
    }
    print "boom";
}
$counter = 3;
countDown($counter);
print 'Now Counter = ' . $counter;