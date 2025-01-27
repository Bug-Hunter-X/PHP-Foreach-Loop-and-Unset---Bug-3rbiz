function foo(array $arr): array {
  return array_filter($arr, fn($value) => $value !== 'bar');
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )
//This uses array_filter which iterates through the array and returns only the elements that pass a given test.  This method avoids modifying the array during iteration and is safer and more efficient than using unset in a foreach loop.
