<?php
/*
Plugin Name: Increase All-In-One WP Migration Limit
Description: Increase file limit from 512 MB to 5 GB with out having to pay for license.
Plugin URI: http://#
Author: Mr.Pakpoom Tiwakornkit
Author URI: http://#
Version: 1.0
License: GPL2
*/

/*

    Copyright (C) 2016  Mr.Pakpoom Tiwakornkit  apt.enjoy@gmail.com

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

function increase_all_in_one_wp_migration_limit() {
    return 5368709120;
}
add_filter( "ai1wm_max_file_size", "increase_all_in_one_wp_migration_limit" );