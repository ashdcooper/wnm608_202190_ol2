<?php 

include "../lib/php/functions.php";

$users = file_get_json("../data/users.json");

function showUserForm($user, $id) {
// heredoc
echo <<<html;
<nav class="nav nav-crumbs">
	<ul>
		<li><a href="admin/users.php">Back</a></li>
	</ul>
</nav>
<form method="post" action="admin/user-edit.php?id=$id">
	<h2>Edit User</h2>
	<div>
		<label for="name">Name</label>
		<input type="text" name="name" id="name" value="$user->name">
	</div>
	<div>
		<label for="type">Type</label>
		<input type="text" name="type" id="type" value="$user->type">
	</div>
	<div>
		<label for="email">Email</label>
		<input type="email" name="email" id="email" value="$user->email">
	</div>
	<div>
		<label for="classes">Classes (comma-separated)</label>
		<input type="text" name="classes" id="classes" value="" . implode(", ", $user->classes) . "">
	</div>
	<div>
		<button type="submit">Save</button>
	</div>
</form>
html;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>User Admin Page</title>
	<?php include "../parts/meta.php"; ?>
</head>
<body>
	<header class="navbar">
		<div class="container display-flex">
			<div class="flex-none">
				<h1>User Admin</h1>
			</div>
			<div class="flex-stretch"></div>
			<nav class="nav nav-flex flex-none">
				<ul>
					<li><a href="admin/users.php">User List</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="card soft">
			<?php 
			if(isset($_GET['id'])) {
				showUserForm($users[$_GET['id']], $_GET['id']);
			} else {
				echo "<h2>User List</h2>";
				echo "<nav class='nav'><ul>";
				for ($i=0; $i <count($users) ; $i++) { 
					echo "<li><a href='admin/users.php?id=$i'>{$users[$i]->name}</a></li>";
				}
				echo "</ul></nav>";
			}
			?>
		</div>
	</div>
</body>
</html>