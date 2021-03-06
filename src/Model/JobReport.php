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
 * @since 4/21/15 10:46 PM
 */
class JobReport implements JobReportInterface
{

    /**
     * @var int
     */
    protected $id;

    /**
     * @var JobConfigurationInterface
     */
    protected $configuration;

    /**
     * @var \DateTime
     */
    protected $endedAt;

    /**
     * @var string
     */
    protected $errorOutput;

    /**
     * @var string
     */
    protected $output;

    /**
     * @var int
     */
    protected $pid;

    /**
     * @var \DateTime
     */
    protected $startedAt;

    /**
     * @var bool
     */
    protected $successful;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->startedAt = new \DateTime();
        $this->successful = false;
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
    public function setConfiguration(JobConfigurationInterface $configuration)
    {
        $this->configuration = $configuration;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfiguration()
    {
        return $this->configuration;
    }

    /**
     * {@inheritdoc}
     */
    public function setEndedAt(\DateTime $endedAt)
    {
        $this->endedAt = $endedAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getEndedAt()
    {
        return $this->endedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setErrorOutput($errorOutput)
    {
        $this->errorOutput = $errorOutput;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getErrorOutput()
    {
        return $this->errorOutput;
    }

    /**
     * {@inheritdoc}
     */
    public function setOutput($output)
    {
        $this->output = $output;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * {@inheritdoc}
     */
    public function setPid($pid)
    {
        $this->pid = $pid;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * {@inheritdoc}
     */
    public function setStartedAt(\DateTime $startedAt)
    {
        $this->startedAt = $startedAt;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getStartedAt()
    {
        return $this->startedAt;
    }

    /**
     * {@inheritdoc}
     */
    public function setSuccessful($successful)
    {
        $this->successful = $successful;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function isSuccessful()
    {
        return $this->successful;
    }
}
