<?php

namespace Api\Controller;

use Simplex\App;
use Symfony\Component\HttpFoundation\Request;
use Api\Model\UsersTable;
use \Firebase\JWT\JWT;

class AuthController extends App
{

    public function authAction(Request $request)
    {

        $data = json_decode($request->getContent(), true);

        $password = $data['password'];

        $users = new UsersTable($this->getEntityManager());

        $result = $users->checkUser($data['useremail']);

        if(!$result || (!password_verify($password, $result['usrPassword']))) {
            return $this->renderAjax(['status' => -1]);
        } else {

            $key = "key_super_secure";
            $payload = [
                'usrId'     => $result['usrId'],
                'usrName'   => $result['usrName'],
                'usrEmail'  => $result['usrEmail'],
                'exp' => time() + 6000
            ];

            $token = JWT::encode($payload, $key);

            return $this->renderAjax(['status' => 0, 'token' => $token]);
        }
    }

}