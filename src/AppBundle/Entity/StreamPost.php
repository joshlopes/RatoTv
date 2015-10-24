<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StreamPost
 *
 * @ORM\Table(name="stream_post", indexes={@ORM\Index(name="autor", columns={"autor"}), @ORM\Index(name="alt_name", columns={"alt_name"}), @ORM\Index(name="category", columns={"category"}), @ORM\Index(name="approve", columns={"approve"}), @ORM\Index(name="allow_main", columns={"allow_main"}), @ORM\Index(name="date", columns={"date"}), @ORM\Index(name="symbol", columns={"symbol"}), @ORM\Index(name="comm_num", columns={"comm_num"}), @ORM\Index(name="tags", columns={"tags"}), @ORM\Index(name="fixed", columns={"fixed"}), @ORM\Index(name="short_story", columns={"short_story", "full_story", "xfields", "title"})})
 * @ORM\Entity
 */
class StreamPost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="autor", type="string", length=40, nullable=false)
     */
    private $autor = '';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime", nullable=false)
     */
    private $date = '0000-00-00 00:00:00';

    /**
     * @var string
     *
     * @ORM\Column(name="short_story", type="text", length=65535, nullable=false)
     */
    private $shortStory;

    /**
     * @var string
     *
     * @ORM\Column(name="full_story", type="text", length=65535, nullable=false)
     */
    private $fullStory;

    /**
     * @var string
     *
     * @ORM\Column(name="xfields", type="text", length=65535, nullable=false)
     */
    private $xfields;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title = '';

    /**
     * @var string
     *
     * @ORM\Column(name="descr", type="string", length=200, nullable=false)
     */
    private $descr = '';

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", length=65535, nullable=false)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="category", type="string", length=200, nullable=false)
     */
    private $category = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="alt_name", type="string", length=200, nullable=false)
     */
    private $altName = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="comm_num", type="integer", nullable=false)
     */
    private $commNum = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_comm", type="boolean", nullable=false)
     */
    private $allowComm = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_main", type="boolean", nullable=false)
     */
    private $allowMain = '1';

    /**
     * @var boolean
     *
     * @ORM\Column(name="approve", type="boolean", nullable=false)
     */
    private $approve = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="fixed", type="boolean", nullable=false)
     */
    private $fixed = '0';

    /**
     * @var boolean
     *
     * @ORM\Column(name="allow_br", type="boolean", nullable=false)
     */
    private $allowBr = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="symbol", type="string", length=3, nullable=false)
     */
    private $symbol = '';

    /**
     * @var string
     *
     * @ORM\Column(name="tags", type="string", length=255, nullable=false)
     */
    private $tags = '';

    /**
     * @var string
     *
     * @ORM\Column(name="metatitle", type="string", length=255, nullable=false)
     */
    private $metatitle = '';

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return StreamPost
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getAutor()
    {
        return $this->autor;
    }

    /**
     * @param string $autor
     * @return StreamPost
     */
    public function setAutor($autor)
    {
        $this->autor = $autor;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return StreamPost
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }

    /**
     * @return string
     */
    public function getShortStory()
    {
        return $this->shortStory;
    }

    /**
     * @param string $shortStory
     * @return StreamPost
     */
    public function setShortStory($shortStory)
    {
        $this->shortStory = $shortStory;
        return $this;
    }

    /**
     * @return string
     */
    public function getFullStory()
    {
        return $this->fullStory;
    }

    /**
     * @param string $fullStory
     * @return StreamPost
     */
    public function setFullStory($fullStory)
    {
        $this->fullStory = $fullStory;
        return $this;
    }

    /**
     * @return string
     */
    public function getXfields()
    {
        return $this->xfields;
    }

    /**
     * @param string $xfields
     * @return StreamPost
     */
    public function setXfields($xfields)
    {
        $this->xfields = $xfields;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     * @return StreamPost
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescr()
    {
        return $this->descr;
    }

    /**
     * @param string $descr
     * @return StreamPost
     */
    public function setDescr($descr)
    {
        $this->descr = $descr;
        return $this;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     * @return StreamPost
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
        return $this;
    }

    /**
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param string $category
     * @return StreamPost
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * @return string
     */
    public function getAltName()
    {
        return $this->altName;
    }

    /**
     * @param string $altName
     * @return StreamPost
     */
    public function setAltName($altName)
    {
        $this->altName = $altName;
        return $this;
    }

    /**
     * @return int
     */
    public function getCommNum()
    {
        return $this->commNum;
    }

    /**
     * @param int $commNum
     * @return StreamPost
     */
    public function setCommNum($commNum)
    {
        $this->commNum = $commNum;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAllowComm()
    {
        return $this->allowComm;
    }

    /**
     * @param boolean $allowComm
     * @return StreamPost
     */
    public function setAllowComm($allowComm)
    {
        $this->allowComm = $allowComm;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAllowMain()
    {
        return $this->allowMain;
    }

    /**
     * @param boolean $allowMain
     * @return StreamPost
     */
    public function setAllowMain($allowMain)
    {
        $this->allowMain = $allowMain;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isApprove()
    {
        return $this->approve;
    }

    /**
     * @param boolean $approve
     * @return StreamPost
     */
    public function setApprove($approve)
    {
        $this->approve = $approve;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isFixed()
    {
        return $this->fixed;
    }

    /**
     * @param boolean $fixed
     * @return StreamPost
     */
    public function setFixed($fixed)
    {
        $this->fixed = $fixed;
        return $this;
    }

    /**
     * @return boolean
     */
    public function isAllowBr()
    {
        return $this->allowBr;
    }

    /**
     * @param boolean $allowBr
     * @return StreamPost
     */
    public function setAllowBr($allowBr)
    {
        $this->allowBr = $allowBr;
        return $this;
    }

    /**
     * @return string
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param string $symbol
     * @return StreamPost
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;
        return $this;
    }

    /**
     * @return string
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param string $tags
     * @return StreamPost
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
        return $this;
    }

    /**
     * @return string
     */
    public function getMetatitle()
    {
        return $this->metatitle;
    }

    /**
     * @param string $metatitle
     * @return StreamPost
     */
    public function setMetatitle($metatitle)
    {
        $this->metatitle = $metatitle;
        return $this;
    }


}

