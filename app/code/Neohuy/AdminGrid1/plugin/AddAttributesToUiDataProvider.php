<?php

namespace Neohuy\AdminGrid1\Plugin;

use Magento\Eav\Api\AttributeRepositoryInterface;
use Magento\Framework\App\ProductMetadataInterface;
use Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult;
use Neohuy\AdminGrid1\Ui\DataProvider\Category\ListingDataProvider as CategoryDataProvider;

class AddAttributesToUiDataProvider
{
    /**
     * @var AttributeRepositoryInterface
     */
    private $attributeRepository;

    /**
     * @var ProductMetadataInterface
     */
    private $productMetadata;

    /**
     * AddAttributesToUiDataProvider constructor.
     * @param AttributeRepositoryInterface $attributeRepository
     * @param ProductMetadataInterface $productMetadata
     */
    public function __construct(AttributeRepositoryInterface $attributeRepository, ProductMetadataInterface $productMetadata)
    {
        $this->attributeRepository = $attributeRepository;
        $this->productMetadata = $productMetadata;
    }

    /**
     * @param CategoryDataProvider $subject
     * @param SearchResult $result
     * @return SearchResult
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function afterGetSearchResult(CategoryDataProvider $subject, SearchResult $result)
    {
        if ($result->isLoaded()) {
            return $result;
        }

//        $edition = $this->productMetadata->getEdition();
//
//        $column = 'entity_id';
//
//        if ($edition == 'Enterprise') {
//            $column = 'row_id';
//        }
//
//        $attribute = $this->attributeRepository->get('catalog_category', 'name');
//
//        $result->getSelect()->joinLeft(
//            ['admingrid1name' => $attribute->getBackendTable()],
//            'admingrid1name.' . $column . ' = main_table.' . $column . ' AND admingrid1name.attribute_id = ' . $attribute->getAttributeId(),
//            ['name' => 'admingrid1name.value']
//        );

//        $result->getSelect()->where('admingrid1name.value LIKE "B%"');

        return $result;
    }
}
