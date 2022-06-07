<?php

function is_logged_in()
{
	$desa = get_instance();
		if(!$desa->session->userdata('email'))
		{
			redirect('login');
		}

		else
		{
			$role_id = $desa->session->userdata('role_id');
			$menu = $desa->uri->segment(1);

			$queryMenu = $desa->db->get_where('user_menu', ['menu' => $menu])->row_array();
			$menu_id = $desa['id'];

			$userAccess = $desa->db->get_where('user_access_menu', 
				[
				 'role_id'  => $role_id
				]);

			if($userAccess->num_rows() < 1)
			{
				redirect('login/blokir');
			}

		}
}