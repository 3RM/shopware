<?php declare(strict_types=1);

namespace Shopware\Unit\Collection;

use Shopware\Shop\Collection\ShopBasicCollection;
use Shopware\Unit\Struct\UnitTranslationDetailStruct;

class UnitTranslationDetailCollection extends UnitTranslationBasicCollection
{
    /**
     * @var UnitTranslationDetailStruct[]
     */
    protected $elements = [];

    public function getUnits(): UnitBasicCollection
    {
        return new UnitBasicCollection(
            $this->fmap(function (UnitTranslationDetailStruct $unitTranslation) {
                return $unitTranslation->getUnit();
            })
        );
    }

    public function getLanguages(): ShopBasicCollection
    {
        return new ShopBasicCollection(
            $this->fmap(function (UnitTranslationDetailStruct $unitTranslation) {
                return $unitTranslation->getLanguage();
            })
        );
    }

    protected function getExpectedClass(): string
    {
        return UnitTranslationDetailStruct::class;
    }
}