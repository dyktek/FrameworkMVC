<?php

namespace Admin\Controller;

use Simplex\App;
use Symfony\Component\HttpFoundation\Request;
use Api\Model\UsersTable;

class AdminController extends App
{

    public function indexAction()
    {
        $userInfo = $this->session->get('userInfo');

        echo '<pre>';
        print_r($userInfo);

        return $this->render('Admin/View/index.html.twig');
    }

    public function loginAction()
    {

//        $password = '123qwe';
//
//        $hash = password_hash($password, PASSWORD_DEFAULT);
//
//        echo $hash;

        return $this->render('Admin/View/login.html.twig', [
            'messages' => $this->session->getFlashBag()->get('error', array())
        ]);
    }

    public function authAction(Request $request)
    {
        $email = $request->request->get('email');
        $password = $request->request->get('password');

        $users = new UsersTable($this->getEntityManager());

        $result = $users->checkUser($email);

        if(!$result || (!password_verify($password, $result['usrPassword']))) {
            $this->session->getFlashBag()->add('error', 'Dane logowania są niepoprawne');
            return $this->redirect('/admin/login');
        } else {
            $this->session->set('userInfo',[
                'role' => $result['usrRole'],
                'name' => $result['usrName'],
                'email' => $result['usrEmail']
            ]);
            return $this->redirect('/admin');
        }
    }

}