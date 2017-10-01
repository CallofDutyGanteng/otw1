<?php

class Mahasiswa extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var string
     * @Primary
     * @Column(type="string", length=11, nullable=false)
     */
    public $nim;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $nama;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $alamat;

    /**
     *
     * @var string
     * @Column(type="string", length=50, nullable=true)
     */
    public $jurusan;

    /**
     *
     * @var string
     * @Column(type="string", length=100, nullable=true)
     */
    public $email;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    
    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("tutordb_phal2");
        $this->setSource("mahasiswa");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'mahasiswa';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mahasiswa[]|Mahasiswa|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return Mahasiswa|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
