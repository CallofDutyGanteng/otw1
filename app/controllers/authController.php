<?php

class authController extends ControllerBase{
	public function loginAction()
	{
	}
	public function loginprosesAction()
	{
		$user = new User();

		$username = $this->request->getPost('username');
		$password = $this->request->getPost('password');
		
		$user = User::findFirstByUsername($username);

		if ($user) {
			if ($username ==  $user->username && $password ==  $user->password ) {
				$this->session->set('username' ,$user->username);
				$this->session->set('hak_akses' ,$user->hak_akses);
				return $this->response->redirect('');
			}
		}
	}
	public function logoutAction()
	{
		$this->session->destroy();
		$this->response->redirect('');
	}
}

