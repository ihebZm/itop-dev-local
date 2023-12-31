<?php
/**
 * Локализация интерфейса Combodo iTop подготовлена сообществом iTop по-русски http://community.itop-itsm.ru.
 *
 * @author      Vladimir Kunin <v.b.kunin@gmail.com>
 * @link        http://community.itop-itsm.ru  iTop Russian Community
 * @link        https://github.com/itop-itsm-ru/itop-rus
 * @license     http://opensource.org/licenses/AGPL-3.0
 *
 */
Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:ConfigEditor' => 'Основные настройки',
	'config-edit-title' => 'Редактор файла конфигурации',
	'config-edit-intro' => 'Будьте очень осторожны при редактировании файла конфигурации. В частности, отредактированы могут быть только глобальная конфигурация и настройки модулей.',
	'config-apply' => 'Применить',
	'config-apply-title' => 'Применить (Ctrl+S)',
	'config-cancel' => 'Сбросить',
	'config-saved' => 'Изменения успешно сохранены.',
	'config-confirm-cancel' => 'Ваши изменения будут утеряны.',
	'config-no-change' => 'Изменений нет: файл не был изменён.',
	'config-reverted' => 'Изменения были сброшены.',
	'config-parse-error' => 'Строка %2$d: %1$s.<br/>Файл не был обновлен.',
	'config-current-line' => 'Редактируемая строка: %1$s',
	'config-saved-warning-db-password' => 'Изменения успешно сохранены, но резервная копия не будет работать из-за неподдерживаемых символов в пароле базы данных.',
	'config-error-transaction' => 'Error: invalid Transaction ID. The configuration was <b>NOT</b> modified.~~',
	'config-error-file-changed' => 'Error: The Configuration file has changed since you opened it and cannot be saved. Refresh and apply your changes again.~~',
	'config-not-allowed-in-demo' => 'Sorry, '.ITOP_APPLICATION_SHORT.' is in <b>demonstration mode</b>: the configuration file cannot be edited.~~',
	'config-interactive-not-allowed' => ITOP_APPLICATION_SHORT.' interactive edition of the configuration as been disabled. See <code>\'config_editor\' => \'disabled\'</code> in the configuration file.~~',
));
