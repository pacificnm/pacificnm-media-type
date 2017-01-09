<?php
namespace Pacificnm\MediaType\Entity;

class Entity
{

    /**
     *
     * @var number
     */
    protected $mediaTypeId;

    /**
     *
     * @var string
     */
    protected $mediaTypeName;

    /**
     *
     * @var boolean
     */
    protected $mediaTypeActive;

    /**
     *
     * @return the $mediaTypeId
     */
    public function getMediaTypeId()
    {
        return $this->mediaTypeId;
    }

    /**
     *
     * @return the $mediaTypeName
     */
    public function getMediaTypeName()
    {
        return $this->mediaTypeName;
    }

    /**
     *
     * @return the $mediaTypeActive
     */
    public function getMediaTypeActive()
    {
        return $this->mediaTypeActive;
    }

    /**
     *
     * @param number $mediaTypeId            
     */
    public function setMediaTypeId($mediaTypeId)
    {
        $this->mediaTypeId = $mediaTypeId;
    }

    /**
     *
     * @param string $mediaTypeName            
     */
    public function setMediaTypeName($mediaTypeName)
    {
        $this->mediaTypeName = $mediaTypeName;
    }

    /**
     *
     * @param boolean $mediaTypeActive            
     */
    public function setMediaTypeActive($mediaTypeActive)
    {
        $this->mediaTypeActive = $mediaTypeActive;
    }
}

