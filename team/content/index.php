<style type="text/css">
.grid-inner.content-box { background-color: #fafae2!important; text-align: center; }
.grid-inner.content-box .btn-outline-info { background-color: white; }
</style>
<?php
$sheet = getSheet('people', 'Group');
//#Name_humanized	Location	Designation	Group	Organization	Email	LinkedIn	Website

DEFINE('PERSONITEM', '
ARTICLE-BOX
### %Name%
<img class="img-fluid rounded-circle" src="%cdn%people/%Slug%.jpg" />
<div class="my-3"><span class="btn btn-outline-info">%Designation%</span></div>
<div class="bg-warning p-3 rounded-4">%Location%</div>
ARTICLE-CLOSE
');


renderGroup('Team', $sheet);

function renderGroup($name, $sheet) {
	$op = ['DIV-PLAINCONTAINER', 'ALLARTICLES', '## ' . $name];
	foreach ($sheet->getAllItemsAsObject($sheet->group[$name], '__enrichPerson') as $item)
		$op[] = replaceItems(PERSONITEM, $item, '%');

	$op[] = 'ALLARTICLES-CLOSE';
	$op[] = 'DIV-CLOSE';

	echo returnLinesNoParas(implode(NEWLINE, $op));
}

function __enrichPerson($item) {
	$item['Slug'] = urlize($item['Name']);
	return $item;
}
