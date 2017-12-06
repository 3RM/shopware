<?php declare(strict_types=1);

namespace Shopware\Shop\Struct;

use Shopware\Api\Entity\Entity;

class ShopTemplateConfigPresetBasicStruct extends Entity
{
    /**
     * @var string
     */
    protected $shopTemplateUuid;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $elementValues;

    /**
     * @var \DateTime|null
     */
    protected $createdAt;

    /**
     * @var \DateTime|null
     */
    protected $updatedAt;

    public function getShopTemplateUuid(): string
    {
        return $this->shopTemplateUuid;
    }

    public function setShopTemplateUuid(string $shopTemplateUuid): void
    {
        $this->shopTemplateUuid = $shopTemplateUuid;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getElementValues(): string
    {
        return $this->elementValues;
    }

    public function setElementValues(string $elementValues): void
    {
        $this->elementValues = $elementValues;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }
}