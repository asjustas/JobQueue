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

use Aureja\JobQueue\Exception\NotFoundParameterException;
use Aureja\JobQueue\JobState;

/**
 * @author Tadas Gliaubicas <tadcka89@gmail.com>
 *
 * @since 4/17/15 12:16 AM
 */
class JobConfiguration implements JobConfigurationInterface
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var \DateTime
     */
    protected $createdAt;

    /**
     * @var bool
     */
    protected $disabled;

    /**
     * @var string
     */
    protected $factory;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var null|\DateTime
     */
    protected $nextStart;

    /**
     * @var array
     */
    protected $parameters;

    /**
     * @var int
     */
    protected $period;

    /**
     * @var int
     */
    protected $priority;

    /**
     * @var string
     */
    protected $queue;

    /**
     * @var array|JobReportInterface[]
     */
    protected $reports;

    /**
     * @var string
     */
    protected $state;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->createdAt = new \DateTime();
        $this->parameters = [];
        $this->priority = 0;
        $this->state = JobState::STATE_NEW;
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setDisabled($disabled)
    {
        $this->disabled = $disabled;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isDisabled()
    {
        return $this->disabled;
    }

    /**
     * {@inheritdoc}
     */
    public function setFactory($factory)
    {
        $this->factory = $factory;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getFactory()
    {
        return $this->factory;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    public function setNextStart(\DateTime $nextStart = null)
    {
        $this->nextStart = $nextStart;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getNextStart()
    {
        return $this->nextStart;
    }

    /**
     * {@inheritdoc}
     */
    public function setParameters(array $parameters)
    {
        $this->parameters = $parameters;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getParameter($key)
    {
        if (isset($this->parameters[$key])) {
            return $this->parameters[$key];
        }

        throw new NotFoundParameterException(sprintf('Not found %s parameter', $key));
    }

    /**
     * {@inheritdoc}
     */
    public function getParameters()
    {
        return $this->parameters;
    }

    /**
     * {@inheritdoc}
     */
    public function addParameter($key, $parameter)
    {
        $this->parameters[$key] = $parameter;
    }

    /**
     * {@inheritdoc}
     */
    public function removeParameter($key)
    {
        if (isset($this->parameters[$key])) {
            unset($this->parameters[$key]);
        }
    }

    /**
     * {@inheritdoc}
     */
    public function setPeriod($period)
    {
        $this->period = $period;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * {@inheritdoc}
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * {@inheritdoc}
     */
    public function setQueue($queue)
    {
        $this->queue = $queue;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getQueue()
    {
        return $this->queue;
    }

    /**
     * {@inheritdoc}
     */
    public function setReports($reports)
    {
        $this->reports = $reports;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getReports()
    {
        return $this->reports;
    }

    /**
     * {@inheritdoc}
     */
    public function addReport(JobReportInterface $report)
    {
        $this->reports[] = $report;
    }

    /**
     * {@inheritdoc}
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getState()
    {
        return $this->state;
    }
}
