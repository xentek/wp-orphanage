=== WP-Orphanage ===
Contributors: xenlab
Donate link: http://xentek.net/code/wordpress/plugins/wp-orphanage/
Tags: users, shared user table, CUSTOM_USER_TABLE, CUSTOM_USER_META_TABLE
Requires at least: 2.5
Tested up to: 2.9
Stable tag: trunk

Plugin to promote users with no roles set (the orphans) to the role of your choosing. Their role is upgraded when they login.

== Description ==

Users who have not been assigned any Roles or Capabilities are called 'orphans'. When using the [shared users table trick](http://xentek.net/articles/528/implementing-the-wordpress-shared-users-table-trick/) to link up multiple WordPress installations, users who register on one of your blogs, are not given any privileges on the other blogs in the network. WP-Orphanage is a plugin that automatically adopts your orphan users by promoting them to the role of your choosing. By default it is the same as the default role set in the WP Options.

It does it in two ways:

1. Users who try to login to a different blog in the network than the one they signed up on, will be promoted at the time of login. The user won't even know that it happened.
1. When the admin logs into the blog and views the users page, all orphan users – for that blog – are promoted automatically.

By taking a just in time approach, this plugin will not add any noticeable overhead to your WordPress blogs, while providing a seamless experience for the users and administrators.

== Installation ==

1. Download the wp-orphanage.zip file, unzip and upload the whole directory to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress.
1. Edit the plugin options to set the role you would like users to be promoted to.
1. As an admin you can visit the Users page to automatically upgrade all orphan users of that blog to that role. Users who login before you do that will also get the same treatment (but only for their account).

== Frequently Asked Questions ==

= Why Would I Want This? =

If you are using the ``CUSTOM_USER_TABLE`` and ``CUSTOM_USER_META_TABLE`` in your [wp-config.php](http://codex.wordpress.org/Editing_wp-config.php#Custom_User_and_Usermeta_Tables), you're probably going to want this.

== Screenshots ==

1. WP-Orphanage Options Screen (which was added in v1.0)

== Changelog ==

= 1.0 =
* Added an options page so that the admin can set the Role orphan users get when they are adopted. By default it will be the same as the default role for new registrations on that blog, but can be set to something different, if you choose.

= 0.5 = 
* Added a proper readme.txt

== License ==

The WP-Orphanage plugin was developed by Eric Marden, and is provided with out warranty under the GPLv2 License. More info and other plugins at: http://xentek.net

Copyright 2008  Eric Marden  (email : wp@xentek.net)

This program is free software; you can redistribute it and/or modify it under the terms of the GNU General Public License as published by the Free Software Foundation; either version 2 of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU General Public License for more details.

You should have received a copy of the GNU General Public License along with this program; if not, write to the Free Software Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA