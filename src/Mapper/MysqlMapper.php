<?php

namespace Pacificnm\MediaType\Mapper;

use Zend\Hydrator\HydratorInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\Sql\Update;
use Zend\Db\Sql\Insert;
use Zend\Db\Sql\Delete;
use Pacificnm\Mapper\AbstractMysqlMapper;
use Pacificnm\MediaType\Entity\Entity;

class MysqlMapper extends AbstractMysqlMapper implements MysqlMapperInterface
{

    /**
     * Mysql Mapper Construct
     *
     * @param AdapterInterface $readAdapter
     * @param AdapterInterface $writeAdapter
     * @param HydratorInterface $hydrator
     * @param Entity $prototype
     */
    public function __construct(AdapterInterface $readAdapter, AdapterInterface $writeAdapter, HydratorInterface $hydrator, Entity $prototype)
    {
        $this->hydrator = $hydrator;
            
        $this->prototype = $prototype;
            
        parent::__construct($readAdapter, $writeAdapter);
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\MediaType\Mapper\MysqlMapperInterface::getAll()
     */
    public function getAll(array $filter)
    {
        $this->select = $this->readSql->select('media_type');
                    
        $this->filter($filter); 

        if (array_key_exists('pagination', $filter)) {
            if ($filter['pagination'] == 'off') {  
                return $this->getRows();    
            }
        }

        return $this->getPaginator();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\MediaType\Mapper\MysqlMapperInterface::get()
     */
    public function get($id)
    {
        $this->select = $this->readSql->select('media_type');

        $this->select->where(array(
            'media_type.media_type_id = ?' => $id  
        ));
                    
        return $this->getRow();
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\MediaType\Mapper\MysqlMapperInterface::save()
     */
    public function save(Entity $entity)
    {
        $postData = $this->hydrator->extract($entity);
                    
        if ($entity->getMediaTypeId()) {
            $this->update = new Update('media_type'); 
                
            $this->update->set($postData);  
                
            $this->update->where(array(
                'media_type.media_type_id = ?' => $entity->getMediaTypeId()
            ));
                    
            $this->updateRow();            
        } else {
            $this->insert = new Insert('media_type'); 
                
            $this->insert->values($postData);
                
            $id = $this->createRow();
                
            $entity->setMediaTypeId($id);        
        }
                    
        return $this->get($entity->getMediaTypeId());
    }

    /**
     * {@inheritdoc}
     *
     * @see \Pacificnm\MediaType\Mapper\MysqlMapperInterface::delete()
     */
    public function delete(Entity $entity)
    {
        $this->delete = new Delete('media_type');
        $this->delete->where(array(
             'media_type.media_type_id = ?' => $entity->getMediaTypeId()
        ));
                 
        return $this->deleteRow();
    }

    /**
     * Filters and search
     *
     * @param array $filter
     * @return \MediaType\Mapper\MysqlMapper
     */
    protected function filter(array $filter)
    {
        return $this;
    }


}

