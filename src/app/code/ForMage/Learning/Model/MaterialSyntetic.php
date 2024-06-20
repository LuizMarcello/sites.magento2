<?php

namespace ForMage\Learning\Model;

use ForMage\Learning\Api\MaterialInterface;

class MaterialSyntetic implements MaterialInterface
{

    public function getMaterial(): string
    {
        return "Synthetic";
    }
}
