<?php

namespace Api\Controller;

use Simplex\App;
use Symfony\Component\HttpFoundation\Request;
use Api\Model\ArticlesTable;

class ArticlesController extends App
{
    public function indexAction()
    {
        $em = $this->getEntityManager();

        $articles = new ArticlesTable($this->getEntityManager());

        $result = $articles->getArticles();


        return $this->renderAjax($result);
    }

    public function getArticleAction($id)
    {
        $em = $this->getEntityManager();


        $articles = new ArticlesTable($this->getEntityManager());
        $data = $articles->getArticle($id);

//        $data = ['idGet' => $id];

        return $this->renderAjax($data);
    }

    public function editArticleAction(Request $request)
    {

        $data = ['idEdit' => $request->request->get('id')];

        return $this->renderAjax($data);
    }

    public function newArticleAction(Request $request)
    {

        $data = ['idNew' => $request->request->get('id')];

        return $this->renderAjax($data);
    }

    public function deleteArticleAction($id)
    {

        $data = ['idDelete' => $id];

        return $this->renderAjax($data);
    }
}