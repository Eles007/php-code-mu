<?php

$query = "SELECT * FROM country";

$res = mysqli_query($link, $query) or die(mysqli_error($link));


for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
}

$content = '';
foreach ($data as $page) {
    $content .= '
			<div>
				<a href="/php-code-mu/25_website_engine/location/' . $page['name'] . '">' . $page['name']
        . '</a> 
			</div>
		';
}

$page = [
    'title' => 'Все страны',
    'content' => $content,
];

return $page;