<?php
namespace pgsavis\psmstructure;
class setRequiredCLS{
    private $sqlFileInstall;
    private $sqlFileUinstall;
    private $name;
    private $tab;
    private $version;
    private $author;
    private $needInstance;
    private $bootstrap;
    private $displayName;
    private $description;
    private $confirmUninstall;
    private $min;
    private $max;
    private $DBPrefix;
    private $hooks=[];
    private $tabs=[];


    /**
     * @return String
     */
    public function getSqlFileInstall()
    {
        return $this->sqlFileInstall;
    }

    /**
     * @param $sqlFileInstall
     */
    public function setSqlFileInstall($sqlFileInstall)
    {
        $this->sqlFileInstall = $sqlFileInstall;
    }

    /**
     * @return mixed
     */
    public function getSqlFileUinstall()
    {
        return $this->sqlFileUinstall;
    }

    /**
     * @param mixed $sqlFileUinstall
     */
    public function setSqlFileUinstall($sqlFileUinstall)
    {
        $this->sqlFileUinstall = $sqlFileUinstall;
    }

    /**
     * @return String
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return String
     */
    public function getTab()
    {
        return $this->tab;
    }

    /**
     * @param $tab
     */
    public function setTab($tab)
    {
        $this->tab = $tab;
    }

    /**
     * @return String
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return String
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return Int
     */
    public function getNeedInstance()
    {
        return $this->needInstance;
    }

    /**
     * @param $needInstance
     */
    public function setNeedInstance($needInstance)
    {
        $this->needInstance = $needInstance;
    }


    /**
     * @return bool
     */
    public function getBootstrap()
    {
        return $this->bootstrap;
    }

    /**
     * @param $bootstrap
     */
    public function setBootstrap($bootstrap)
    {
        $this->bootstrap = $bootstrap;
    }

    /**
     * @return String
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * @param $displayName
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    /**
     * @return String
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return String
     */
    public function getConfirmUninstall()
    {
        return $this->confirmUninstall;
    }

    /**
     * @param $confirmUninstall
     */
    public function setConfirmUninstall($confirmUninstall)
    {
        $this->confirmUninstall = $confirmUninstall;
    }

    /**
     * @return String
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param $min
     */
    public function setMin($min)
    {
        $this->min = $min;
    }

    /**
     * @return String
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param $max
     */
    public function setMax($max)
    {
        $this->max = $max;
    }


    /**
     * @return mixed
     */
    public function getDBPrefix()
    {
        return $this->DBPrefix;
    }

    /**
     * @param mixed $DBPrefix
     */
    public function setDBPrefix($DBPrefix)
    {
        $this->DBPrefix = $DBPrefix;
    }


    /**
     * @return array
     */
    public function getTabs()
    {
        return $this->tabs;
    }

    /**
     * @param array $tabs
     */
    public function setTabs(array $tabs)
    {
        $this->tabs = $tabs;
    }

    /**
     * @return array
     */
    public function getHooks()
    {
        return $this->hooks;
    }

    /**
     * @param array $hooks
     */
    public function setHooks(array $hooks)
    {
        $this->hooks = $hooks;
    }























}