<?php
/**
 * Created by PhpStorm.
 * User: miky
 * Date: 08/05/17
 * Time: 17:24
 */

namespace Miky\Component\Core\Model;


interface StatusInterface
{
    /**
     * @return boolean
     */
    public function getDrafted();

    /**
     * @param boolean $drafted
     */
    public function setDrafted($drafted);

    /**
     * @return boolean
     */
    public function getEnabled();

    /**
     * @param boolean $enabled
     */
    public function setEnabled($enabled);

    /**
     * @return boolean
     */
    public function getValidated();

    /**
     * @param boolean $validated
     */
    public function setValidated($validated);

    /**
     * @return boolean
     */
    public function getPendingValidation();

    /**
     * @param boolean $pendingValidation
     */
    public function setPendingValidation($pendingValidation);


    /**
     * @return boolean
     */
    public function getConfirmed();

    /**
     * @param boolean $confirmed
     */
    public function setConfirmed($confirmed);

    /**
     * @return boolean
     */
    public function getCertified();

    /**
     * @param boolean $certified
     */
    public function setCertified($certified);


    /**
     * @return boolean
     */
    public function getExpired();

    /**
     * @param boolean $expired
     */
    public function setExpired($expired);
}