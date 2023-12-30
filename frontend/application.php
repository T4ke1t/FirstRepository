<?php
// This will generate a Notice that an array cannot b
$source = [1, 2, 3, 4];
$filter = [3, 4, [5], 6];
$result = array_diff($source, $filter);
// Whereas this is fine, since the objects can cast t
class S
{
    private $v;
    public function __construct(string $v)
    {
        $this->v = $v;
    }
    public function __toString()
    {
        return $this->v;
    }
}
$source = [new S('a'), new S('b'), new S('c')];
$filter = [new S('b'), new S('c'), new S('d')];
$result = array_diff($source, $filter);
// $result now contains one instance of S('a');
$string = "string";
echo $string;
$randomNumber = rand(0,10);
echo $randomNumber;
// tu toje