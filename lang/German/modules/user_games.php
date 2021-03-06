<?php
/*
 *
 * OGP - Open Game Panel
 * Copyright (C) 2008 - 2017 The OGP Development Team
 *
 * http://www.opengamepanel.org/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 *
 */

define('add_mods_note', "You need to add mods after adding server to user. This can be done by editing the server.");
define('game_servers', "Spielserver ");
define('game_path', "Game Pfad");
define('game_path_info', "Ein absoluter Serverpfad. Beispiel: /home/ogp/my_server/");
define('game_server_name_info', "Servername hilft Benutzern, ihre Server zu identifizieren. ");
define('control_password', "Control Passwort");
define('control_password_info', "This password is used for server control, such as RCON password. If the password is empty then other means are used.");
define('add_game_home', "Game Server hinzufügen");
define('game_path_empty', "Game path can not be empty.");
define('game_home_added', "Game server added successfully. Redirecting to home edit page.");
define('failed_to_add_home_to_db', "Failed to add home to database. Error: %s");
define('caution_agent_offline_can_not_get_os_and_arch_showing_servers_for_all_platforms', "<b>Caution!</b> The Agent is offline, can not get OS type and architecture,<br> Showing servers for all platforms:");
define('select_remote_server', "Select Remote Server");
define('no_remote_servers_configured', "No remote servers configured to the Open Game Panel.<br>You need to add remote servers before you can add servers for the users.");
define('no_game_configurations_found', "No game configuration found. You need to add game configurations from the");
define('game_configurations', ">Spiele Konfigurationsseite");
define('add_remote_server', "Server hinzufügen");
define('wine_games', "Wine Spiele");
define('home_path', "Home Pfad");
define('change_home_info', "Der Standort des installierten Spielservers. Beispiel: /home/ogp/my_server/");
define('game_server_name', "Game server name");
define('change_name_info', "The name of the server to help users to identify it.");
define('game_control_password', "Game Control Passwort");
define('change_control_password_info', "Control password is for example rcon password.");
define('available_mods', "Verfügbare Mods");
define('note_no_mods', "No mod(s) available for this game.");
define('change_home', "Home speichern");
define('change_control_password', "Control Passwort speichern");
define('change_name', "Name speichern");
define('add_mod', "Mod hinzufügen");
define('set_ip', "Set IP");
define('ips_and_ports', "IPs und Ports");
define('mod_name', "Mod Name");
define('max_players', "Max Spieler");
define('extra_cmd_line_args', "Extra Command Line Args");
define('extra_cmd_line_info', "The Extra command line args provides a way to enter extra arguments to the game command line when it is started.");
define('cpu_affinity', "CPU-Affinität");
define('nice_level', "Nice Level");
define('set_options', "Set Options");
define('remove_mod', "Mod entfernen");
define('mods', "Mods");
define('ip', "IP");
define('port', "Port");
define('no_ip_ports_assigned', "At least one IP:Port pair must be assigned to the home.");
define('successfully_assigned_ip_port', "Successfully assigned IP:Port pair to home.");
define('port_range_error', "Der Port muss zwischen 0 und 65535 liegen.");
define('failed_to_assing_mod_to_home', "Failed to assing mod with id %d to home.");
define('successfully_assigned_mod_to_home', "Successfully assigned mod with id %d to home.");
define('successfully_modified_mod', "Successfully modified mod information.");
define('back_to_game_monitor', "Zurück zu Game Monitor");
define('back_to_game_servers', "Zurück zu Game Server");
define('user_id_main', "Hauptbesitzer");
define('change_user_id_main', "Hauptbesitzer speichern");
define('change_user_id_main_info', "The main server home owner.");
define('server_ftp_password', "FTP Passwort");
define('change_ftp_password', "FTP Passwort speichern");
define('change_ftp_password_info', "This is the password to login to FTP server for this home.");
define('Delete_old_user_assigned_homes', "Unassign home to current users.");
define('editing_home_called', "Editing home called");
define('control_password_updated_successfully', "Control password updated successfully.");
define('control_password_update_failed', "Control password update failed");
define('successfully_changed_game_server', "Successfully changed game server.");
define('error_ocurred_on_remote_server', "Error ocurred on remote server,");
define('ftp_password_can_not_be_changed', "FTP-Passwort kann nicht geändert werden.");
define('ftp_can_not_be_switched_on', "FTP kann nicht eingeschaltet werden.");
define('ftp_can_not_be_switched_off', "FTP kann nicht ausgeschaltet werden.");
define('invalid_home_id_entered', "Invalid home id entered.");
define('ip_port_already_in_use', "The %s:%s is already in use. Choose another one.");
define('successfully_assigned_ip_port_to_server_id', "Successfully assigned %s:%s to home with ID %s.");
define('no_ip_addresses_configured', "Your game server does not have any IP-addresses configured to it. You can configure them from ");
define('server_page', "server page");
define('successfully_removed_mod', "Successfully removed game mod.");
define('warning_agent_offline_defaulting_CPU_count_to_1', "Warning - Agent offline, defaulting CPU count to 1.");
define('mod_install_cmds', "Mod Install CMDs");
define('cmds_for', "Commands for");
define('preinstall_cmds', "Preinstall Commands");
define('postinstall_cmds', "Postinstall Commands");
define('edit_preinstall_cmds', "Edit Preinstall Commands");
define('edit_postinstall_cmds', "Edit Postinstall Commands");
define('save_as_default_for_this_mod', "Save as default for this mod");
define('empty', "leer");
define('master_server_for_clon_update', "Master server for local update");
define('set_as_master_server', "Set as master server");
define('set_as_master_server_for_local_clon_update', "Set as master server for local update.");
define('only_available_for', "Only available for '%s' hosted on the remote server named '%s'.");
define('ftp_on', "FTP aktivieren");
define('ftp_off', "FTP deaktivieren");
define('change_ftp_account_status', "Change FTP account status");
define('change_ftp_account_status_info', "Once a FTP account is enabled or disabled, it is added or removed from the FTP's database.");
define('server_ftp_login', "Server FTP Login");
define('change_ftp_login_info', "Change the FTP Login with a customized one.");
define('change_ftp_login', "Change FTP Login");
define('ftp_login_can_not_be_changed', "Can not change FTP Login.");
define('server_is_running_change_addresses_not_available', "The server is actually running, the IP cannot be changed.");
define('change_game_type', "Change Game Type");
define('change_game_type_info', "By changing the game type the current the mods configuration will be deleted.");
define('force_mod_on_this_address', "Force mod on this address");
define('successfully_assigned_mod_to_address', "Successfully assigned mod to address");
define('switch_mods', "Switch mods");
define('switch_mod_for_address', "Switch mod for address %s");
define('invalid_path', "Ungültiger Pfad");
define('add_new_game_home', "Add new game server");
define('no_game_homes_found', "Keine Game Server gefunden");
define('available_game_homes', "Verfügbare Game Server");
define('home_id', "Home ID");
define('game_server', "Spielserver");
define('game_type', "Game Typ");
define('game_home', "game server");
define('game_home_name', "game server Name");
define('clone', "Duplizieren");
define('unassign', "Zuweisung aufheben");
define('access_rights', "Rechte");
define('assigned_homes', "Derzeit zugewiesene Homes");
define('assign', "Zuweisen");
define('allow_updates', "Allow Game Updates");
define('allow_updates_info', "Allows user to update the game installation if that is possible.");
define('allow_file_management', "File Management");
define('allow_file_management_info', "Allows user to access the game server with file management modules.");
define('allow_parameter_usage', "Allow Parameter Usage");
define('allow_parameter_usage_info', "Allows user to change available command line parameters.");
define('allow_extra_params', "Zusätzliche Parameter zulassen");
define('allow_extra_params_info', "Allows user to modify extra command line parameters.");
define('allow_ftp', "FTP zulassen");
define('allow_ftp_info', "Show the FTP access information to the user.");
define('allow_custom_fields', "Allow Custom Fields");
define('allow_custom_fields_info', "Allows user to access custom fields of the game server if any.");
define('select_home', "Select Home to Assign");
define('assign_new_home_to_user', "Assign New Home to user %s");
define('assign_new_home_to_group', "Assign New Home to group %s");
define('assigned_home_to_user', "Successfully assigned home (ID: %d) to user %s.");
define('assigned_home_to_group', "Successfully assigned home (ID: %d) to group %s.");
define('unassigned_home_from_user', "Successfully unassigned home (ID: %d) from user %s.");
define('unassigned_home_from_group', "Successfully unassigned home (ID: %d) from group %s.");
define('no_homes_assigned_to_user', "No homes assigned for user %s.");
define('no_homes_assigned_to_group', "No homes assigned for group %s.");
define('no_more_homes_available_that_can_be_assigned_for_this_user', "No more homes available that can be assigned for this user");
define('no_more_homes_available_that_can_be_assigned_for_this_group', "No more homes available that can be assigned for this group");
define('you_can_add_a_new_game_server_from', "You can add a new game server from %s.");
define('no_remote_servers_available_please_add_at_least_one', "There are no remote servers available, please add at least one!");
define('cloning_of_home_failed', "Cloning of home with id '%s' failed.");
define('no_mods_to_clone', "No enabled mod(s) for this game yet. None will be cloned.");
define('failed_to_add_mod', "Failed to add mod with id '%s' to home with id '%s'.");
define('failed_to_update_mod_settings', "Failed to update mod settings for home with id '%s'.");
define('successfully_cloned_mods', "Successfully cloned mods for home with id '%s'.");
define('successfully_copied_home_database', "Successfully copied home database.");
define('copying_home_remotely', "Copying the home on remote server from '%s' to '%s'.");
define('cloning_home', "Cloning home called '%s'");
define('current_home_path', "Current home path");
define('current_home_path_info', "The current location of the copied home on remote server.");
define('clone_home', "Clone Home");
define('new_home_name', "New Home Name");
define('new_home_path', "New Home Path");
define('agent_ip', "Agent IP");
define('game_server_copy_is_running', "Game server copy is running...");
define('game_server_copy_was_successful', "Game server copy was successful");
define('game_server_copy_failed_with_return_code', "Game server copy failed with return code %s");
define('clone_mods', "Clone Mods");
define('game_server_owner', "Game server owner");
define('the_name_of_the_server_to_help_users_to_identify_it', "The name of the server to help users to identify it.");
define('ips_and_ports_used_in_this_home', "IPs and Ports used in this home");
define('note_ips_and_ports_are_not_cloned', "Hinweis - IPs und Ports werden nicht geklont.");
define('mods_and_settings_for_this_game_server', "Mods and settings for this game server");
define('sure_to_delete_serverid_from_remoteip_and_directory', "Are you sure you want to delete game server (ID: %s) from server %s and is in directory %s");
define('yes_and_delete_the_files', "Yes and Delete the files");
define('failed_to_remove_gamehome_from_database', "Failed to remove gamehome from database.");
define('successfully_deleted_game_server_with_id', "Successfully deleted game server with ID %s.");
define('failed_to_remove_ftp_account_from_remote_server', "Failed to remove FTP account from remote server.");
define('remove_it_anyway', "Möchten Sie es trotzdem entfernen?");
define('sucessfully_deleted', "Erfolgreich gelöscht %s");
define('the_agent_had_a_problem_deleting', "The agent had a problem deleting %s, check the agent log");
define('connection_timeout_or_problems_reaching_the_agent', "Connection timeout or problems reaching the agent");
define('does_not_exist_yet', "Gibt es noch nicht.");
define('go_to_custom_fields', "Go to Custom Fields");
define('back_to_edit_server', "Back to edit server");
define('update_settings', "Update settings");
define('settings_updated', "Settings updated.");
define('selected_path_already_in_use', "The selected path is already in use.");
define('browse', "Durchsuchen");
define('cancel', "Abbrechen");
define('set_this_path', "Diesen Pfad festlegen");
define('select_home_path', "Select home path");
define('folder', "Ordner");
define('owner', "Besitzer");
define('group', "Gruppe");
define('level_up', "Level up");
define('level_up_info', "Zurück zum vorherigen Ordner.");
define('add_folder', "Ordner hinzufügen");
define('add_folder_info', "Write the name for the new folder, then click on the icon.");
define('valid_user', "Please specify a valid user.");
define('valid_group', "Please specify a valid group.");
define('set_affinity', "Set Server Affinity");
define('cpu_affinity_info', "Select the CPU core(s) you want to assign to the game server.");
define('expiration_date_changed', "Expiration date for selected home has been changed.");
define('expiration_date_could_not_be_changed', "Expiration date for selected home could not be changed.");
define('search', "Search");
?>