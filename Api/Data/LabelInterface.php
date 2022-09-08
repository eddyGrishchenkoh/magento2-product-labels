<?php

namespace Magecat\Label\Api\Data;

interface LabelInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const LABEL_ID = 'label_id';
    const NAME     = 'name';

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId(): ?int;

    /**
     * Get title
     *
     * @return string|null
     */
    public function getTitle(): ?string;

    /**
     * Set ID
     *
     * @param int $id
     * @return LabelInterface
     */
    public function setId(int $id): LabelInterface;


    /**
     * Set title
     *
     * @param string $title
     * @return LabelInterface
     */
    public function setTitle(string $title): LabelInterface;
}
