```php
function foo(array $arr): void {
    // Solution 1: Using a for loop
    for ($i = count($arr) - 1; $i >= 0; $i--) {
        if ($arr[$i] === 'bar') {
            unset($arr[$i]);
        }
    }
    //Solution 2: Iterating over a copy
    // foreach ($arr as $key => $value) {   //Use foreach here
    //     if ($value === 'bar') {
    //         unset($arr[$key]);
    //     }
    // }
}

$arr = ['foo', 'bar', 'baz'];
foo($arr);
print_r($arr); // Output: Array ( [0] => foo [2] => baz )
```