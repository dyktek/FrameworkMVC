<?php

namespace Api\Model;

class CategoriesTable extends BaseTable
{
    public function getCategories(array $options = [])
    {
        $currentPage = isset($options['page']) ? $options['page'] : 0;
        $pageSize = isset($options['pageSize']) ? $options['pageSize'] : 10;

        $query = $this->qb->select('cat')
            ->from('Api\Model\Categories', 'cat')
            ->orderBy('cat.catId', 'DESC');

        $paginator  = new \Doctrine\ORM\Tools\Pagination\Paginator($query);

        $totalItems = $paginator->count();

        $paginator
            ->getQuery()
            ->setFirstResult($pageSize * $currentPage)
            ->setMaxResults($pageSize)
            ->getArrayResult();


        $list = [];
        foreach($paginator as $item) {
            $list[] = $item;
        }

        return ['data' => $list, 'totalRecords' => $totalItems];
    }

    public function getCategory($id)
    {
        $q = $this->qb->select('cat')
            ->from('Api\Model\Categories', 'cat')
            ->where('cat.catId = :catId')
            ->setParameter('catId', $id);

        return $q->getQuery()->getArrayResult();
    }
    
    public function saveCategory($data) 
    {
        if($data['catId']) {
            $category = $this->em->getRepository('Api\Model\Categories')->find($data['catId']);
        } else {
            $category = new Categories();
        }

        if($category) {
            $category->setCatName($data['catName']);
            $category->setCatStatus($data['catStatus']);

            $this->em->persist($category);
            $this->em->flush();

            return true;
        } else {
            return false;
        }
    }

}