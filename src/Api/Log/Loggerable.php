<?php

namespace SkyHub\Api\Log;

trait Loggerable
{
    
    /** @var Logger */
    protected $logger;
    
    /** @var string */
    protected $logName     = 'skyhub_api';
    
    /** @var string */
    protected $logFileName = 'skyhub_api.log';
    
    /** @var string */
    protected $logFilePath = './';
    
    /** @var string */
    protected $logAllowed  = false;
    
    /** @var string */
    protected $logLevel    = \Monolog\Logger::DEBUG;
    
    
    /**
     * @return \SkyHub\Api\Log\Logger
     */
    protected function logger()
    {
        if (empty($this->logger)) {
            $this->logger = new Logger(
                $this->logName,
                $this->logFilePath,
                $this->logFileName,
                $this->logLevel,
                $this->logAllowed
            );
        }
        
        return $this->logger;
    }
    
    
    /**
     * @param bool $flag
     *
     * @return $this
     */
    public function setLogAllowed($flag = true)
    {
        $this->logAllowed = (bool) $flag;
        return $this;
    }
    
    
    /**
     * @return bool
     */
    public function isLogAllowed()
    {
        return (bool) $this->logAllowed;
    }
    
    
    /**
     * @param string $name
     *
     * @return $this
     */
    public function setLogName($name = 'skyhub_api')
    {
        $this->logName = (string) $name;
        return $this;
    }
    
    
    /**
     * @return string
     */
    public function getLogName()
    {
        return $this->logName;
    }
    
    
    /**
     * @param string $filename
     *
     * @return $this
     */
    public function setLogFileName($filename = 'skyhub_api.log')
    {
        $this->logFileName = (string) $filename;
        return $this;
    }
    
    
    /**
     * @return string
     */
    public function getLogFileName()
    {
        return $this->logFileName;
    }
    
    
    /**
     * @param string $path
     *
     * @return $this
     */
    public function setLogFilePath($path)
    {
        $this->logFilePath = (string) $path;
        return $this;
    }
    
    
    /**
     * @return string
     */
    public function getLogFilePath()
    {
        return $this->logFilePath;
    }
    
    
    /**
     * @param int $level
     *
     * @return $this
     */
    public function setLogLevel($level = \Monolog\Logger::DEBUG)
    {
        $this->logLevel = (int) $level;
        return $this;
    }
    
    
    /**
     * @return string
     */
    public function getLogLevel()
    {
        return $this->logLevel;
    }
}
