<?php
/**
 	Filename:   users_delete.php
 	Date:       2016-01-20
 	Author:     Lars Veldscholte
 	            lars@veldscholte.eu
 	            http://lars.veldscholte.eu

 	Copyright 2016 Lars Veldscholte

 	This file is part of RadiusAdmin.

 	RadiusAdmin is free software: you can redistribute it and/or modify
 	it under the terms of the GNU General Public License as published by
 	the Free Software Foundation, either version 3 of the License, or
 	(at your option) any later version.

 	RadiusAdmin is distributed in the hope that it will be useful,
 	but WITHOUT ANY WARRANTY; without even the implied warranty of
 	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 	GNU General Public License for more details.

 	You should have received a copy of the GNU General Public License
 	along with RadiusAdmin. If not, see <http://www.gnu.org/licenses/>.
 */

$usermapper = new UserMapper($fr_db);
$usermapper->delete($_GET['name']);

$messagecontroller->set(new SuccessfulDeleteMessage());
header("Location: index.php?page=users");

?>