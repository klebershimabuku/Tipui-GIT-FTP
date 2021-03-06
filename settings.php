<?php

/**
* @file   settings.php
* @brief  General settings
* @date   2013-10-06 15:06:00
* @license http://opensource.org/licenses/GPL-3.0 GNU Public License
* @company: Tipui Co. Ltda.
* @author: Daniel Omine <omine@tipui.com>
* @updated: 2013-10-06 15:06:00
*
*/


/**
* Optional default settings
* Recommended NOT use for security reasons. Keep all empty
* Use it just for debug purposes.
*/

/**
* FTP host, user and password settings.
*/
$ftp_host    = '';
$ftp_user    = '';
$ftp_pass    = '';

/**
* The path base of your app sources files.
*/
$local_base  = '';

/**
* The path base of your app on remote location (FTP).
*/
$remote_base = '';

/**
* The full path of file generated by git command line.
* > git whatchanged --name-status --since '3 days ago' --oneline > git_changes.txt
*/
$queue_file  = '';