<?php
/*-------------------------------------------------------
*
*   LiveStreet Engine Social Networking
*   Copyright © 2008 Mzhelskiy Maxim
*
*--------------------------------------------------------
*
*   Official site: www.livestreet.ru
*   Contact e-mail: rus.engine@gmail.com
*
*   GNU General Public License, version 2:
*   http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*
---------------------------------------------------------
*/
/**
 * Настройки для локального сервера.
 * Для использования - переименовать файл в config.local.php
 */

/**
 * Настройка базы данных
 */
$config['db']['params']['host'] = 'u224958.mysql.masterhost.ru';
$config['db']['params']['port'] = '3306';
$config['db']['params']['user'] = 'u224958';
$config['db']['params']['pass'] = '5usatingly';
$config['db']['params']['type']   = 'mysql';
$config['db']['params']['dbname'] = 'u224958_quarry';
$config['db']['table']['prefix'] = 'prefix_';

$config['path']['root']['web'] = 'http://quarry.ru/';
$config['path']['root']['server'] = '/home/u224958/quarry.ru/www/';
$config['path']['offset_request_url'] = '0';
$config['db']['tables']['engine'] = 'InnoDB';
$config['view']['name'] = 'Карьер';
$config['view']['description'] = 'Владельцам собак здесь также прикольно, как самим собакам в карьере';
$config['view']['keywords'] = 'собака,  питомник, родословная, статьи';
$config['view']['skin'] = 'synio';
$config['view']['tinymce']         = true;
$config['sys']['mail']['from_email'] = 'vangosha@mail.ru';
$config['sys']['mail']['from_name'] = 'Почтальон Карьера';
$config['general']['close'] = false;
$config['general']['reg']['activation'] = false;
$config['general']['reg']['invite'] = false;
$config['lang']['current'] = 'russian';
$config['lang']['default'] = 'russian';

$config['view']['img_resize_width'] = 570;    // до какого размера в пикселях ужимать картинку по щирине при загрузки её в топики и комменты
$config['view']['img_max_width'] = 15000;    // максимальная ширина загружаемых изображений в пикселях
$config['view']['img_max_height'] = 15000;    // максимальная высота загружаемых изображений в пикселях
$config['view']['img_max_size_url'] = 15000;    // максимальный размер картинки в kB для загрузки по URL

$config['module']['topic']['max_length'] = 150000;       // Максимальное количество символов в одном топике

return $config;
?>