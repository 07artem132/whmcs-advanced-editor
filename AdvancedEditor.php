<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 15.07.2018
 * Time: 16:50
 */

function AdvancedEditor_config() {
	return [
		"name"        => "Расширенный редактор базы знаний",
		"description" => "Данный модуль позволяет использовать CKEditor для редактирования статей в базе знаний",
		"version"     => "1",
		"author"      => "service-voice",
		"fields"      => [
			'Note' => [
				'Description'  => 'Данный модуль не имеет административного вывода',
				'FriendlyName' => 'Заметка:'
			]
		],
	];

}