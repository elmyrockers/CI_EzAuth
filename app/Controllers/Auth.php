<?php
namespace App\Controllers;
use App\Controllers\BaseController;






class Auth extends BaseController
{
	public function register()
	{
		$this->auth->register('', true, 'localhost:8080/auth/verify_email' );
	}

	public function login()
	{
		$this->auth->login(function( $row ) {
										if ( $this->hasError ) return;

										if ( $row[ 'role' ] == '2' ) return '../admin/dashboard';  // 2 - Member area for admins
										elseif ( $row[ 'role' ] == '1' ) return '../teacher/dashboard'; // 1 - Member area for teachers
										elseif ( $row[ 'role' ] == '0' ) return '../student/dashboard'; // 0 - Member area for students
									});
	}

	public function verify_email()
	{
		$this->tpl->autoRender = false;
		$this->auth->verifyEmail( '/auth/login' );
	}

	public function logout()
	{
		$this->tpl->autoRender = false;
		$this->auth->logout( '/auth/login' );
	}
}
