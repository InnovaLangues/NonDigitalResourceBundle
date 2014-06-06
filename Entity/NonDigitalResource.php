<?php

namespace Innova\NonDigitalResourceBundle\Entity;

use Claroline\CoreBundle\Entity\Resource\AbstractResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * NonDigitalResource
 *
 * @ORM\Table("innova_non_digital_resource")
 * @ORM\Entity
 */
class NonDigitalResource extends AbstractResource
{
    /**
     * Description of the resource
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * Set description
     *
     * @param  string             $description
     * @return \Innova\NonDigitalResourceBundle\Entity\NonDigitalResource
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
}
