<?php
function showUser($user){
    echo ("<tr><td>".$user->get('username')."</td><td>".$user->get('accesslevel')."</td><td><a href=\"index.php?page=cms&amp;cmsid=1&amp;username=".$user->get('username')."\">Edit User</a>");
}

function editUser($user){
	echo("
	<form role=\"form\" method=\"post\" action=\"index.php?page=cms&amp;cmsid=1\" name=\"edituser\">
	    <div class=\"form-group\">
	    	<label for=\"user_edit_username\">Username</label>
	    	<input id=\"user_edit_username\" class=\"form-control\" name=\"username\" type=\"text\" value=\"" . $user->get('username') . "\" readonly>
	    </div>
	    <div class=\"form-group\">
	    	<label for=\"user_edit_accesslevel\">Accesslevel</label>
	    	<input id=\"user_edit_accesslevel\" value=\"" . $user->get('accesslevel') . "\"\" class=\"form-control\" type=\"number\" name=\"accesslevel\" min=\"1\" max=\"100\" required />
	    </div>
	    <a class=\"btn btn-lg btn-default\" href=\"index.php?page=cms&amp;cmsid=1\">Back to all Users</a>
	    <button type=\"submit\" class=\"btn btn-lg btn-default\" name=\"edituser\" value=\"Edit User\">Save changes</button>
    </form>
    ");
}


?>