<?php
namespace ZeroConfig\Preacher\Plugin\CommonMark;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class PreacherCommonMarkBundle extends Bundle
{
    /**
     * Get the name of the parent bundle.
     *
     * @return string
     */
    public function getParent(): string
    {
        return 'PreacherBundle';
    }
}
