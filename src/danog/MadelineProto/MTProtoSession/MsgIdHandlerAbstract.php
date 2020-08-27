<?php

/**
 * MsgIdHandler module.
 *
 * This file is part of MadelineProto.
 * MadelineProto is free software: you can redistribute it and/or modify it under the terms of the GNU Affero General Public License as published by the Free Software Foundation, either version 3 of the License, or (at your option) any later version.
 * MadelineProto is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 * See the GNU Affero General Public License for more details.
 * You should have received a copy of the GNU General Public License along with MadelineProto.
 * If not, see <http://www.gnu.org/licenses/>.
 *
 * @author    Daniil Gentili <daniil@daniil.it>
 * @copyright 2016-2020 Daniil Gentili <daniil@daniil.it>
 * @license   https://opensource.org/licenses/AGPL-3.0 AGPLv3
 *
 * @link https://docs.madelineproto.xyz MadelineProto documentation
 */
namespace danog\MadelineProto\MTProtoSession;

/**
 * Manages message ids.
 */
abstract class MsgIdHandlerAbstract
{
    /**
     * Session instance.
     *
     * @var Session
     */
    protected $session;
    /**
     * Constructor.
     *
     * @param Session $session Session
     */
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    /**
     * Check validity of given message ID.
     *
     * @param string $newMessageId New message ID
     * @param array  $aargs        Params
     *
     * @return void
     */
    public abstract function checkMessageId($newMessageId, array $aargs);
    /**
     * Generate outgoing message ID.
     *
     * @return string
     */
    public abstract function generateMessageId() : string;
    /**
     * Get maximum message ID.
     *
     * @param boolean $incoming Incoming or outgoing message ID
     *
     * @return mixed
     */
    public abstract function getMaxId(bool $incoming);
}