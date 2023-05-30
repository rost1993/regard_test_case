<?php

class test {
	public $next;
}

$a = new test();
$b = new test();
$c = new test();
$d = new test();
$e = new test();
$f = new test();

$a->next = $b;
$b->next = $c;
$c->next = $d;
$d->next = $e;
$f->next = null;

function reverse($a) {
	$result = null;

	if($a->next) {
		recursion($a->next, $a, $result);
	}

	$a->next = null;

	return $result;
}

function recursion($obj, $parent_obj, &$result = null) {
	if($obj->next) {
		recursion($obj->next, $obj, $result);
	} else {
		$result = $obj;
	}

	$obj->next = $parent_obj;
}

$ob1 = reverse($a);
var_dump($ob1);