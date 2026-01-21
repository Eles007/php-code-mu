<?php

$query = "SELECT slug, title FROM pages";
$res = mysqli_query($link, $query) or die(mysqli_error($link));

for ($data = []; $row = mysqli_fetch_assoc($res); $data[] = $row) {
}

$content = '';
foreach ($data as $page) {
    $content .= '
			<div>
				<a href="php-code-mu/25_website_engine/page/' . $page['slug'] . '">' . $page['title']
        . '</a> 
			</div>
		';
}

$page = [
    'title' => 'all pages',
    'content' => $content,
];

return $page;