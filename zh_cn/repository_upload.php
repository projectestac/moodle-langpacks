<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'repository_upload', language 'zh_cn', version '4.4'.
 *
 * @package     repository_upload
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['configplugin'] = '上传插件配置';
$string['pluginname'] = '上传一个文件';
$string['pluginname_help'] = '上传一个文件到Moodle';
$string['privacy:metadata'] = '上传文件存储库插件不存储或传输任何个人数据。';
$string['upload:view'] = '在文件选择器中上传文件';
$string['upload_error_cant_write'] = '向磁盘写入文件失败。';
$string['upload_error_extension'] = '一个PHP扩展中断了文件上传。';
$string['upload_error_form_size'] = '上传文件的大小超过了HTML表单中设定的MAX_FILE_SIZE的限制。';
$string['upload_error_ini_size'] = '上传文件的大小超过了php.ini中设定的upload_max_filesize的限制。';
$string['upload_error_invalid_file'] = '文件“{$a}”为空或为文件夹。要上传文件夹，请先将其压缩。';
$string['upload_error_no_file'] = '没有上传任何文件';
$string['upload_error_no_tmp_dir'] = 'PHP缺少一个临时文件夹。';
$string['upload_error_partial'] = '文件只上传了一部分。';
