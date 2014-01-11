<?php
/**
 * This file is part of the Tmdb PHP API created by Michael Roterman.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package Tmdb
 * @author Michael Roterman <michael@wtfz.net>
 * @copyright (c) 2013, Michael Roterman
 * @version 0.0.1
 */
namespace Tmdb\Api;

class Jobs
    extends AbstractApi
{
    /**
     * Get a list of valid jobs.
     *
     * @param array $options
     * @param array $headers
     * @return mixed
     */
    public function getMovieChanges(array $options = array(), array $headers = array())
    {
        return $this->get('job/list', $options, $headers);
    }
}