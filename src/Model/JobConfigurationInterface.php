<?php

/*
 * This file is part of the Aureja package.
 *
 * (c) Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Aureja\JobQueue\Model;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 4/20/15 11:17 PM
 */
interface JobConfigurationInterface
{

    /**
     * Get id.
     *
     * @return int
     */
    public function getId();

    /**
     * Get created at.
     *
     * @return \DateTime
     */
    public function getCreatedAt();

    /**
     * Set factory.
     *
     * @param string $factory
     *
     * @return JobConfigurationInterface
     */
    public function setFactory($factory);

    /**
     * Get factory.
     *
     * @return string
     */
    public function getFactory();

    /**
     * Set next start.
     *
     * @param null|\DateTime $nextStart
     *
     * @return JobConfigurationInterface
     */
    public function setNextStart(\DateTime $nextStart = null);

    /**
     * Get next start.
     *
     * @return null|\DateTime
     */
    public function getNextStart();

    /**
     * Set parameters.
     *
     * @param array $parameters
     *
     * @return JobConfigurationInterface
     */
    public function setParameters(array $parameters);

    /**
     * Get parameter.
     *
     * @param string $key
     *
     * @return string
     */
    public function getParameter($key);

    /**
     * Get parameters.
     *
     * @return array
     */
    public function getParameters();

    /**
     * Add parameter.
     *
     * @param string $key
     * @param string $parameter
     */
    public function addParameter($key, $parameter);

    /**
     * Remove parameter.
     *
     * @param $key
     */
    public function removeParameter($key);

    /**
     * Set period.
     *
     * @param int $period
     *
     * @return JobConfigurationInterface
     */
    public function setPeriod($period);

    /**
     * Get period.
     *
     * @return int
     */
    public function getPeriod();

    /**
     * Set priority.
     *
     * @param int $priority
     *
     * @return JobConfigurationInterface
     */
    public function setPriority($priority);

    /**
     * Get priority.
     *
     * @return int
     */
    public function getPriority();

    /**
     * Set queue.
     *
     * @param string $queue
     *
     * @return JobConfigurationInterface
     */
    public function setQueue($queue);

    /**
     * Get queue.
     *
     * @return string
     */
    public function getQueue();

    /**
     * Set reports.
     *
     * @param array|ReportInterface[] $reports
     *
     * @return JobConfigurationInterface
     */
    public function setReports($reports);

    /**
     * Get reports.
     *
     * @return array|ReportInterface[]
     */
    public function getReports();

    /**
     * Add report.
     *
     * @param ReportInterface $report
     */
    public function addReport(ReportInterface $report);

    /**
     * Set state.
     *
     * @param string $state
     *
     * @return JobConfigurationInterface
     */
    public function setState($state);

    /**
     * Get state.
     *
     * @return string
     */
    public function getState();
}