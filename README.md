# PHP Foreach Loop and Unset() Bug

This repository demonstrates a common, subtle bug in PHP when using `unset()` within a `foreach` loop to modify an array.  The issue arises because the internal array pointer might be affected unexpectedly when elements are removed during iteration.

## Bug Description
The provided `bug.php` file contains a function that attempts to remove elements from an array using `unset()` inside a `foreach` loop. This often leads to incorrect results or skipped elements, as the array's internal pointer is not always updated correctly.

## Solution
The `bugSolution.php` file demonstrates a correct approach using array_filter() to resolve this issue.  This method avoids the pitfalls of direct modification within the foreach loop.  Refer to the comments in the code for a more detailed explanation.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php` to see the incorrect output.
3. Run `bugSolution.php` to see the corrected output.
