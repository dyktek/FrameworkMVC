<?php

namespace Api\Controller;

use Simplex\App;
use Symfony\Component\HttpFoundation\Request;
use Api\Model\CategoriesTable;

class CategoriesController extends App
{
    public function indexAction($page)
    {
        $categories = new CategoriesTable($this->getEntityManager());

        $result = $categories->getCategories(array(
            'page' => intval($page)
        ));
        
        return $this->renderAjax($result);
    }

    public function categoryAction($id)
    {
        $categories = new CategoriesTable($this->getEntityManager());

        $result = $categories->getCategory(intval($id));

        //return $this->renderAjax($result);
        return $this->renderAjax(($result) ? $result[0] : $result);
    }

    public function saveAction(Request $request)
    {
        $data = json_decode($request->getContent(), true);

        $categories = new CategoriesTable($this->getEntityManager());
        $result = $categories->saveCategory($data);

        return $this->renderAjax(['status' => $result]);
    }
}