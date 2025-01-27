function foo(array $arr): array {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//The bug is that unset() doesn't work properly when you're modifying an array during a foreach loop.
// The correct solution is to iterate over a copy of the array or to use a filter.
