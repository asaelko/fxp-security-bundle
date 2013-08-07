<?php

/*
 * This file is part of the Sonatra package.
 *
 * (c) François Pluchino <francois.pluchino@sonatra.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonatra\Bundle\SecurityBundle\Acl\Model;

/**
 * Acl Rule Context Interface.
 *
 * @author François Pluchino <francois.pluchino@sonatra.com>
 */
interface AclRuleContextInterface
{
    /**
     * Get security identities.
     *
     * @return \Symfony\Component\Security\Acl\Model\SecurityIdentityInterface[]
     */
    public function getSecurityIdentities();

    /**
     * Get username.
     *
     * @return string|null
     */
    public function getUsername();

    /**
     * Check if the context has a role name.
     *
     * @param string $name
     *
     * @return boolean
     */
    public function hasRole($name);

    /**
     * Get all role names in context.
     *
     * @return array
     */
    public function getRoles();

    /**
     * Check if the context has a group name.
     *
     * @param string $name
     *
     * @return boolean
     */
    public function hasGroup($name);

    /**
     * Get all group names in context.
     *
     * @return array
     */
    public function getGroups();

    /**
     * Check if the context is authenticated anonymously.
     *
     * @return boolean
     */
    public function isAuthenticatedAnonymously();

    /**
     * Check if the context is authenticated remembered.
     *
     * @return boolean
     */
    public function isAuthenticatedRemembered();

    /**
     * Check if the context is authenticated fully.
     *
     * @return boolean
     */
    public function isAuthenticatedFully();
}
