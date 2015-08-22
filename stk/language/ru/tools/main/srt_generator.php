<?php
/**
*
* @package Support Toolkit language Russian Sheer
* @version $Id$
* @copyright (c) 2010 phpBB Group
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

/**
* @ignore
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » " " …
// --------------------------------------------------------------------------------------------
// For the time being this file isn't translatable. The Support Toolkit will always force the
// English version when the "Support Request Generator" is ran.
//

$lang = array_merge($lang, array(
	'COMPILED_TEMPLATE_EXPLAIN'		=> 'Создана форма запроса в службу поддержки. Скопируйте ее в буфер обмена и внесите в форму запроса в соответствующую тему в <a href="http://www.phpbbguru.net/community/forum47.html">Форум поддержки phpBB 3.1.x</a> всю полученную информацию. Если вы уже пытались делать запрос в службу поддержки и создали соответствующую тему, скопируйте полученную форму запроса в новое сообщение в вашей теме, не создавая новую тему.',
	'COULDNT_LOAD_SRT_ANSWERS'		=> 'Генератор создания формы запросов не может загрузить варианты вопросов. Попробуйте запустить генератор позже или обновите версию STK.',
	'SRT_GENERATOR'					=> 'Генератор запросов в службу поддержки',
	'SRT_GENERATOR_LANDING'			=> 'Средство создания формы запроса',
	'SRT_GENERATOR_LANDING_CONFIRM'	=> 'Добро пожаловать в Генератор запросов в службу поддержки. Генератор поможет вам создать запрос в группу поддержки для решения проблем, возникших на форуме. Ответьте на несколько вопросов. Ваши ответы будут скомпилированы в форму запроса. Полученную форму запроса можно будет скопировать в соответствующую тему на форуме Тех Поддержки.<br />Запустить генератор запросов? (Внимание!!! Генератор не запустится с включенной опцией автоперевода в браузере.',
	'SRT_NO_CACHE'					=> 'Генератор формы запроса использует проверку системных файлов phpBB. Ваша версия phpBB не соответствует данной версии генератора. Воспользуйтесь генератором формы запроса на форуме phpBB. <a href="http://www.phpbb.com/support/srt/">online SRT Generator</a>',
	'START_OVER'					=> 'Начать сначала',
	'NO_ANSVER'						=> 'Ответ не предоставлен',
	'BY_SRT_GENERATOR'				=> 'Создано при помощи генератора запросов в службу поддержки',

));

// Step 1 strings
$lang = array_merge($lang, array(
//	'STEP1_CONVERT'			=> '',
//	'STEP1_CONVERT_EXPLAIN'	=> '',
	'STEP1_MOD'				=> 'Проблема связана с расширениями?',
	'STEP1_MOD_EXPLAIN'		=> 'Проблема возникла после установки или удаления какого-либо расширения?',
	'STEP1_MOD_ERROR'		=> 'Вопросы, связанные с поддержкой расширений (например, если вы только что установили расширение и теперь возникли ошибки) должны быть размещены в теме, где вы скачали расширение. Если расширение был загружено с другого сайта, вам придется искать поддержки там.<br /><br /><a href="http://www.phpbbguru.net/community/phpbb-3-1-x-f65.html">Перейти на форум поддержки расширений</a>',
	'STEP1_HACKED'			=> 'Была ли ваша конференция взломана?',
	'STEP1_HACKED_EXPLAIN'	=> 'Выберите "Да" если вам требуется поддержка, так как ваша конференция была повреждена, иначе вы поставите нас под угрозу.',
	'STEP1_HACKED_ERROR'	=> 'Если ваша конференция была взломана, подайте отчет о расследование инцидента вместо обращения на форум поддержки, для того, чтобы никакая конфиденциальная информация не была доступна третьим лицам.<br /><br />Смотрите <a href="http://www.phpbb.com/incidents/"><b>здесь</b></a> как это сделать.',
));

// The questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS'			=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'Какую версию phpBB вы используете?',
			'board_url'			=> 'Ссылка на вашу конференцию?',
			'dbms'				=> 'Какой тип/версию базы данных вы используете?',
			'php'				=> 'Какую версию PHP вы используете?',
			'host_name'			=> 'Кто предоставляет услуги хостинга?',
			'install_type'		=> 'Как вы установили вашу конференцию?',
			'inst_converse'		=> 'Вы используете чистую установку или конвертацию?',
			'mods_installed'	=> 'Установлены ли у вас какие-либо расширения?',
			'registration_req'	=> 'Требуется ли регистрация для воспроизводства проблемы?',
		),
		'step3'	=> array(
			'installed_styles'		=> 'Какие стили у вас установлены в данный момент?',
			'installed_languages'	=> 'Какие языковые пакеты установлены на вашей конференции?',
			'xp_level'				=> 'Каков ваш уровень опыта?',
			'problem_started'		=> 'Когда возникла ваша проблема?',
			'problem_description'	=> 'Опишите вашу проблему',
			'installed_mods'		=> 'Какие расширения у вас установлены?',
			'test_username'			=> 'Какое имя пользователя можно использовать, чтобы увидеть проблему?',
			'test_password'			=> 'Какой пароль можно использовать, чтобы увидеть проблему?',
		),
	),
));

// Explain lines for the questions
$lang = array_merge($lang, array(
	'SRT_QUESTIONS_EXPLAIN'	=> array(
		'step2'	=> array(
			'phpbb_version'		=> 'SRT Generator не может определить, какую версию phpBB вы используете, поэтому правильно укажите версию. Чтобы получить эту информацию, зайдите на свою конференцию, перейдите вниз страницы и кликните по ссылке "Администраторский раздел", затем перейдите на вкладку "Система" и перейдите по ссылке "Сведения о PHP"',
			'board_url'			=> 'URL конференции - это адрес, который вы используете для доступа к вашей конференции. Большинство проблем легче исправить, если можно получить доступ к вашей конференции. Если вы не хотите сообщать эту информацию, введите "n/a".',
			'dbms'				=> 'Чтобы определить, какой тип базы данных и ее версию вы используете, перейдите в Администраторский раздел. На вкладке "Общие" обратите внимание на строку "Сервер базы данных:".',
			'php'				=> 'Чтобы определить, какую версию PHP вы используете, перейдите в Администраторский раздел. На вкладке "Система" перейдите по ссылке "Сведения о PHP"',
			'host_name'			=> 'Некоторые проблемы, возникшие с конференциями phpBB, могут возникнуть у конкретных хостеров. Укажите в этом поле название компании, которая предоставляет веб-хостинг (например, GoDaddy, Yahoo!, TimeWeb, и т.д.). Если конференция установлена на вашем собственном сервере, укажите это. Если вы не знаете, кто является хостером вашей конференции, также укажите это.',
			'install_type'		=> 'Если вы установили свою конференцию, загрузив файлы phpBB на сервер, и затем, запустив скрипт установки, выберите один из вариантов "Я использовал..." Если кто-то другой установил вашу конференцию, выберите "Кто-то другой установил конференцию на мой сайт." Если вы использовали автоматизированное средство установки, выберите "Я использовал инструмент, предоставляемый моим хостером."',
			'inst_converse'		=> 'Чистая установка означает, что ваша конференция не существовала до установки phpBB. Если вы недавно обновили конференцию с более старой версии phpBB3 до появления проблемы, выберите "Обновление с более ранней версии phpBB3". Конвертация означает, что ваша конференция ранее работала под управлением другого программного обеспечения, которое была позже сконвертировано в phpBB.',
			'mods_installed'	=> 'Расширения часто являются причиной многих проблем, связанных с phpBB. Эта информация может помочь определить точную причину вашей проблемы.',
			'registration_req'	=> 'Выберите "Да", если для того, чтобы увидеть вашу проблему, нужно войти на конференцию как зарегистрированный пользователь.',
		),
		'step3'	=> array(
			'installed_styles'		=> 'Устаревший стиль является причиной многих проблем. Если вы не знаете, какие стили у вас установлены, перейдите в Администраторский раздел, затем перейдите к вкладке «Персонализация» --> "Управление стилями" и перейдите по ссылке "Стили".',
			'installed_languages'	=> 'Устаревший языковой пакет является причиной многих проблем. Если вы не знаете, какие языковые пакеты у вас установлены, перейдите в Администраторский раздел, затем перейдите к вкладке «Персонализация» --> "Языки" и перейдите по ссылке "Языковые пакеты".',
			'xp_level'				=> 'Выберите тот вариант, который лучше всего описывает ваш уровень опыта.',
			'problem_started'		=> 'Опишите действия, которые вы предприняли (обновление, установка расширения и т.д.), до появления проблемы.',
			'problem_description'	=> 'Попытайтесь, как можно более подробно описать вашу проблему. Включите информацию о том, когда начались проблемы, какие действия нужно предпринять, чтобы воспроизвести проблему, и любую другую информацию, которую вы сочтете полезной.',
			'installed_mods'		=> 'SRT Generator попытался сам определить установленные расширения, тем не менее, пожалуйста, попробуйте как можно подробнее перечислить установленные расширения. Эта информация очень поможет в определении причины вашей проблемы.',
			'test_username'			=> 'Укажите имя пользователя тестовой учетной записи, которое может быть использовано, для того чтобы увидеть проблему. <strong>Не давайте</strong> эту информацию, если для этого требуются права доступа, выше, чем у "обычного" зарегистрированного пользователя.',
			'test_password'			=> 'Укажите пароль тестовой учетной записи, который может быть использован, для того чтобы увидеть проблему. <strong>Не давайте</strong> эту информацию, если для этого требуются права доступа, выше, чем у "обычного" зарегистрированного пользователя.',
		),
	),
));

// Langauge strings that are used for building dropdown boxes
$lang = array_merge($lang, array(
	'SRT_DROPDOWN_OPTIONS'	=> array(
		'step2'	=> array(
			'install_type'	=> array(
				null			=> 'Выберите ответ',
				'myself'		=> 'Я использовал установочный пакет с phpBB.com',
				'guru'			=> 'Я использовал установочный пакет с phpbbguru.net',
				'third'			=> 'Я использовал установочный пакет с другого сайта',
				'someone_else'	=> 'Кто-то другой установил конференцию на мой сайт',
				'automated'		=> 'Я использовал инструмент, предоставляемый моим хостером',
			),
			'inst_converse'	=> array(
				null				=> 'Выберите ответ',
				'fresh'				=> 'Чистая установка',
				'phpbb_update'		=> 'Обновление с более ранней версии phpBB3',
				'convert_phpbb2'	=> 'Конвертация с phpBB2',
				'convert_other'		=> 'Конвертация с другого программного обеспечения',
			)
		),
		'step3'	=> array(
			'xp_level'		=> array(
				null			=> 'Выберите ответ',
				'new_both'		=> 'Новичок в PHP и phpBB',
				'new_phpbb'		=> 'Новичок в phpBB, но не в PHP',
				'new_php'		=> 'Новичок в PHP, но не в phpBB',
				'comfort'		=> 'Достаточно опытный пользователь PHP и phpBB',
				'experienced'	=> 'Опытный пользователь PHP и phpBB',
			),
		),
	),
));
