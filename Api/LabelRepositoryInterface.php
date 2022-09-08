<?php

namespace Magecat\Label\Api;

use Magecat\Label\Api\Data\LabelInterface;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\Exception\NoSuchEntityException;

/**
 * CMS label CRUD interface.
 * @api
 * @since 100.0.2
 */
interface LabelRepositoryInterface
{
    /**
     * Save label.
     *
     * @param LabelInterface $label
     * @return LabelInterface
     * @throws LocalizedException
     */
    public function save(LabelInterface $label): LabelInterface;

    /**
     * Retrieve label.
     *
     * @param int $labelId
     * @return LabelInterface
     * @throws LocalizedException
     */
    public function getById(int $labelId): LabelInterface;

    /**
     * Delete label.
     *
     * @param LabelInterface $label
     * @return bool true on success
     * @throws LocalizedException
     */
    public function delete(LabelInterface $label): bool;

    /**
     * Delete label by ID.
     *
     * @param int $labelId
     * @return bool true on success
     * @throws NoSuchEntityException
     * @throws LocalizedException
     */
    public function deleteById(int $labelId): bool;
}
