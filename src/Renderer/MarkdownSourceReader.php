<?php
namespace ZeroConfig\Preacher\Plugin\CommonMark\Renderer;

use League\CommonMark\CommonMarkConverter;
use SplFileObject;
use ZeroConfig\Preacher\Renderer\SourceReaderInterface;
use ZeroConfig\Preacher\Source\SourceInterface;

class MarkdownSourceReader implements SourceReaderInterface
{
    /** @var CommonMarkConverter */
    private $converter;

    /**
     * Constructor.
     *
     * @param CommonMarkConverter $converter
     */
    public function __construct(CommonMarkConverter $converter)
    {
        $this->converter = $converter;
    }

    /**
     * Get the contents of the given source.
     *
     * @param SourceInterface $source
     *
     * @return string
     */
    public function getContents(SourceInterface $source): string
    {
        $file     = new SplFileObject($source->getPath(), 'r');
        $markdown = implode('', iterator_to_array($file));

        return $this->converter->convertToHtml($markdown);
    }
}
