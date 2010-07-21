<pre>
<?php

// SELECT * FROM UsersPermissions WHERE UserId = @0
function getUserPermissions()
{
	$result = array();

	$values = array();
	$values["View"] = true;
	$values["Share"] = false;
	$result["Admin"] = $values;

	return $result;
}

// SELECT * FROM UsersRoles WHERE UserId = @0
function getUserRoles()
{
	$result = array(5,6);
	return $result;
}

// $role = SELECT * FROM Roles WHERE Id = @0
// SELECT Id FROM Roles WHERE lid <= @0 AND rid >= @1 ORDER BY lid ASC, $role->lid, $role->rid
function getHierarchy($roleId)
{
	if($roleId == 5)
	{
		return array(1,3,5);
	}
	elseif($roleId == 6)
	{
		return array(1,2,6);
	}
}

// SELECT * FROM RolesPermissions WHERE RoleId
function getRolePermissions($roleId)
{
	if($roleId == 1)
	{
		return array();
	}
	elseif($roleId == 2)
	{
		$result = array();

		$values = array();
		$values["Share"] = true;
		$result["Admin"] = $values;
		return $result;
	}
	elseif($roleId == 3)
	{
		$result = array();
		$values = array();
		$values["Edit"] = true;
		$values["Delete"] = false;
		$result["Article1"] = $values;

		$values = array();
		$values["Edit"] = false;
		$values["Delete"] = true;
		$result["Article2"] = $values;
		return $result;
	}
	elseif($roleId == 5)
	{
		$result = array();
		$values = array();
		//$values["Edit"] = false;
		$result["Article1"] = $values;
		return $result;
	}
}

//var_dump(getUserPermissions());


//echo "\n\n";
//var_dump($var);

function populate($userId)
{
	// This will contain all of the permissions the user has been specified
	$permissions = array();

	// assuming that $identity has an id column
	$userPermissions = getUserPermissions(); //$db->query("SELECT * FROM UsersPermissions WHERE UserId = @0", $identity->id);

	// Go through each user explicit permission
	foreach($userPermissions as $permissionName => $values) {
		// $permission["name"] could be something like "Article1"
		// $permission["values"] could be something like ""View:true,NewTopic:true,Reply:true,EditSelf:true""

		// These are all the access permissions with that permission name
		$access = array();

		// Store that array of permissions in the overall array
		$permissions[$permissionName] = $values;
	}

	// These are all of the permissions specified to the user by roles
	$rolesPermissions = array();

	// Get the permissions on the chains of roles the user is in
	$roles = getUserRoles($userId);
	foreach($roles as $role) {

		// This is the overall result for the heirarchy of the current role
		// Something like
		// [article1] =>
		//				[view] => [true]
		//				[edit] => [true]
		//				[delete] => [true]
		$roleAccess = array();

		$parents = getHierarchy($role);
  		foreach($parents as $parent) {
  			// Foreach node closer to the role the user is in
  			// get the permission
  			//while($permission = getRolesPermissions($parent);
  			$rolePermissions = getRolePermissions($parent);//$db->query("SELECT * FROM RolesPermissions WHERE roleId = @0", $parent);

  			if ($rolePermissions != null)
  			{
				foreach($rolePermissions as $name=>$values)
				{
					// If this key hasn't been initialized, then do it
					if (!isset($rolesPermissions[$name]))
					{
						$rolesPermissions[$name] = array();
					}
					foreach($values as $key=>$value)
					{
						$rolesPermissions[$name][$key] = $value;
					}
				}
			}
		}
	}

//	var_dump($permissions);
//	var_dump($rolesPermissions);
	// Right now if we get two different answers from different chains, then the result is not gaurenteed.
	// Aka: Dont have ambiguous ACL trees
	foreach($permissions as $name => $values)
	{
		if (!isset($rolesPermissions[$name]))
		{
			$rolesPermissions[$name] = array();
		}

		foreach($values as $key=>$value)
		{
			$rolesPermissions[$name][$key] = $value;
		}
	}
	return $rolesPermissions;
	//echo "\n";
//	var_dump($rolesPermissions);
//	echo "\n\n\n";
	//return $permissions;
}

function can($permissions, $name, $value)
{
	if (isset($permissions[$name][$value]))
		return $permissions[$name][$value];
	else
		return false;
}

$permissions = populate(4);

var_dump($permissions);

$value = can($permissions, "Article1", "Edit");
var_dump($value);
?>
</pre>