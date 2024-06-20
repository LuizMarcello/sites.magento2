<?php

namespace ForMage\Learning\Controller\Page;

use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;

// use ForMage\Learning\Wrong\SizeNormal;
// use ForMage\Learning\Wrong\SizeBig;
// use ForMage\Learning\Wrong\ColorBlue;
// use ForMage\Learning\Wrong\ColorYellow;
use ForMage\Learning\Api\ColorInterface;
use ForMage\Learning\Api\SizeInterface;
use ForMage\Learning\Model\Product\Shoe;
use ForMage\Learning\Model\Product\Shirt;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $size;
    protected $color;
    protected $product;
    protected $shirt;

    public function __construct(
        Context        $context,
        SizeInterface  $size,
        ColorInterface $color,
        Shoe           $product,
        Shirt          $shirt

    )
    {
        parent::__construct($context);
        $this->size = $size;
        $this->color = $color;
        $this->product = $product;
        $this->shirt = $shirt;
    }

    public function execute(): void
    {
//        echo $this->product->getShoe();
//        var_dump($this->product);
        /*Pegando a instância do ObjectManager*/
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        /*Agora pegando uma instância dessa classe, através do ObjectManager*/
        $product = $objectManager->create("Magento\Catalog\Model\Product")->load(2);
        $product->setName('Samsung Galaxy');
        $productName = $product->getName();
        var_dump($productName);
    }
}
