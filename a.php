<?php
function sayHello($people) {
	foreach($people as $person) {
		yield "hello " . $person;
        }
}
sayHello(array('foo', 'bar', 'baz'));
echo "generator";
echo "smartisam T1";
